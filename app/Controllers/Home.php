<?php

namespace App\Controllers;
use App\Models\SettingModel;
use App\Models\ItemModel;
use App\Models\ProductModel;
use App\Models\PaymentMethodModel;
use App\Models\InvoiceModel;
use App\Models\SliderModel;
use App\Models\FavouriteModel;

use ShortCode\Random;
use ShortCode\Code;

class Home extends BaseController
{
    private $setting;
    public function __construct(){
        $GeneralSetting = new SettingModel();
        $this->setting = $GeneralSetting->first();
    }

    public function index(): string
    {
        $setting = $this->setting;
        $itemModel = new ItemModel();
        $sliderModel = new SliderModel();
        $favouriteModel = new FavouriteModel();

        $sliders = $sliderModel->get()->getResult();

        $favourites = $favouriteModel
            ->join('items', 'items.id = favourites.section')
            ->join('categories', 'categories.id = items.id_cats')
            ->get()->getResult();

        $items = $itemModel
            ->join('categories', 'categories.id = items.id_cats')
            ->where('status', 'enable')
            ->findAll();

        $dataItems = [];

        foreach ($items as $item) {
            $dataItems[$item['category']][] = [
                'name' => $item['item_name'],
                'slug' => $item['slug'],
                'category' => $item['category'],
                'image' => $item['image'],
            ];
        }

        $session = session();
        $user_id = $session->get('user_id');

        return view('home', compact('setting', 'user_id', 'sliders', 'favourites', 'dataItems'));
    }

    public function orderProduct($category, $slug): string
    {
        $setting = $this->setting;
        $itemModel = new ItemModel();
        $productModel = new ProductModel();
        $payMethods = new PaymentMethodModel();

        $products = $productModel->join('items', 'items.id = products.id_item')->where('slug', $slug)->findAll();
        $detailProduct = $itemModel->where('slug', $slug)->first();
        $methods = $payMethods->findAll();

        $session = session();
        $user_id = $session->get('user_id');

        return view('order', compact('setting', 'user_id', 'detailProduct', 'products', 'methods'));
    }

    public function confirmInvoice(){
        $random = Random::get(15, Code::FORMAT_ALNUM_CAPITAL);
        $categoryProduct = $this->request->getPost('category');
        $serviceName = $this->request->getPost('service');
        $IdSendTo = $this->request->getPost('player');
        $servID = $this->request->getPost('server');
        $payMethod = $this->request->getPost('payment');
        $price = $this->request->getPost('pricing');
        $skuCode = $this->request->getPost('skucode');
        $gameCode = $this->request->getPost('forgame');

        $session = session();
        $user_id = $session->get('user_id');

        if($categoryProduct == 1){
            helper('checkidgame');
            // Panggil fungsi untuk melakukan pengecekan akun game
            $merchant_id = 'M230429AERK1567DJ';
            $game_code = $gameCode;
            $user_id = $IdSendTo;
            $server_id = $servID;
            $secret_key = '1728ed0671737c37834f555ba154a025fa9294d76d945d76efd278ddc84483bd';

            $response = checkidgame($merchant_id, $game_code, $user_id, $server_id, $secret_key);

            if ($response['data']['is_valid'] == true) {
                if ($servID === null) {
                    $dataPost = [
                        'id_buyer' => $user_id,
                        'id_player' => $IdSendTo,
                        'hash_transaction'  => $random,
                        'category'  => $categoryProduct,
                        'service'   => $serviceName,
                        'methods_pay'   => $payMethod,
                        'price'  => $price,
                        'order_status'  => "pending",
                        'sku_code'   => $skuCode,
                    ];
                } else {
                    $dataPost = [
                        'id_buyer' => $user_id,
                        'id_player' => $IdSendTo,
                        'server' => $servID,
                        'hash_transaction'  => $random,
                        'category'  => $categoryProduct,
                        'service'   => $serviceName,
                        'methods_pay'   => $payMethod,
                        'price'  => $price,
                        'order_status'  => "pending",
                        'sku_code'   => $skuCode,
                    ];
                    $invoiceModel = new InvoiceModel();
                    $invoiceModel->insert($dataPost);
                }
            } else {
                $session = session();
                $session->setFlashdata('notif', $response['message']); // respond dari check id game
                return redirect()->back();
            }

        }elseif($categoryProduct == 2){

        }elseif($categoryProduct == 3){

        }elseif($categoryProduct == 4){
            $dataPost = [
                'id_buyer' => $user_id,
                'hash_transaction'  => $random,
                'category'  => $categoryProduct,
                'service'   => $serviceName,
                'id_player' => $IdSendTo,
                'methods_pay'   => $payMethod,
                'price'  => $price,
                'order_status'  => "pending",
                'sku_code'   => $skuCode,
            ];
            $invoiceModel = new InvoiceModel();
            $invoiceModel->insert($dataPost);
        }elseif($categoryProduct == 5){

        }elseif($categoryProduct == 6){

        }

        // Setelah mejalankan pengkondisian sesuai $categoryProduct
        return redirect()->to('invoice/' . $random);
    }

    public function purchase($random)
    {
        $setting = $this->setting;
        $invoiceModel = new InvoiceModel();
        $invoiceResult = $invoiceModel
            ->join('categories', 'categories.id = invoices.category')
            ->join('items', 'items.id = invoices.service')
            ->join('payment_methods', 'payment_methods.id = invoices.methods_pay')
            ->where('hash_transaction', $random)
            ->first();
        $session = session();
        $user_id = $session->get('user_id');

        // Periksa nilai methods_pay
        if ($invoiceResult && $invoiceResult['methods_pay'] == 7) {
            // Jika methods_pay == 7,
            return view('manual-purchase', compact('setting', 'user_id', 'invoiceResult'));
        } else {
            // Jika methods_pay bukan 6,
            return view('purchase', compact('setting', 'user_id', 'invoiceResult'));
        }

    }

    public function runPayment(){
        $merchantRef  = $this->request->getPost('reffcode');
        $methodPay = $this->request->getPost('method');
        $amountfloat       = $this->request->getPost('price');
        $amount = intval($amountfloat);

        $apiKey = 'DEV-69p1qCV3m54d5zNcUhkciM7YphqBhE6V4I0eSrXR';
        $privateKey   = 'Mgg9k-JZxfv-8pwnV-XRAcX-dIn7M';
        $merchantCode = 'T15728';

        $data = [
            'method'         => $methodPay,
            'merchant_ref'   => $merchantRef,
            'amount'         => $amount,
            'customer_name'  => 'Nama Pelanggan',
            'customer_email' => 'emailpelanggan@domain.com',
            'customer_phone' => '081234567890',
            'order_items'    => [
                [
                    'sku'         => $this->request->getPost('skucode'),
                    'name'        => $this->request->getPost('service'),
                    'price'       => $amount,
                    'quantity'    => 1,
                ],
            ],
            'return_url'   => base_url('/'),
            'expired_time' => (time() + (24 * 60 * 60)), // 24 jam
            'signature'    => hash_hmac('sha256', $merchantCode.$merchantRef.$amount, $privateKey)
        ];

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_FRESH_CONNECT  => true,
            CURLOPT_URL            => 'https://tripay.co.id/api-sandbox/transaction/create',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER         => false,
            CURLOPT_HTTPHEADER     => ['Authorization: Bearer '.$apiKey],
            CURLOPT_FAILONERROR    => false,
            CURLOPT_POST           => true,
            CURLOPT_POSTFIELDS     => http_build_query($data),
            CURLOPT_IPRESOLVE      => CURL_IPRESOLVE_V4
        ]);

        $response = curl_exec($curl);
        curl_close($curl);
        // dd($response);
        $decodeData = json_decode($response, true);
        $checkoutUrl = $decodeData['data']['checkout_url'];
        return redirect()->to($checkoutUrl);
    }

    public function trackInvoice(){
        $setting = $this->setting;

        $session = session();
        $user_id = $session->get('user_id');

        return view('tracking', compact('setting', 'user_id'));
    }

    public function trackInv(){
        $invoiceCode = $this->request->getPost('invoice');

        $invoiceModel = new InvoiceModel();
        $invoice = $invoiceModel->where('hash_transaction', $invoiceCode)->first();

        if ($invoice) {
            // Jika invoice ditemukan, tampilkan informasinya
            return redirect()->to('invoice/' . $invoiceCode)->with('invoice', $invoice);
        } else {
            // Jika tidak ditemukan, tampilkan pesan error
            return redirect()->to('tracking')->back()->with('notif', 'Invoice tidak di temukan.');
        }
    }

    public function priceList(){

    }

    public function about(){

    }

    public function privpol(){
        return view('privacyandpolicy');
    }
}
