<?php

namespace App\Controllers;
use App\Models\SettingModel;
use App\Models\ItemModel;
use App\Models\ProductModel;
use App\Models\PaymentMethodModel;
use App\Models\InvoiceModel;
use App\Models\SliderModel;

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

        $sliders = $sliderModel->get()->getResult();

        $items = $itemModel
            ->join('categories', 'categories.id = items.id_cats')
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

        return view('home', compact('setting', 'user_id', 'sliders', 'dataItems'));
    }

    public function orderProduct($category, $slug): string
    {
        $setting = $this->setting;
        $itemModel = new ItemModel();
        $productModel = new ProductModel();
        $payMethods = new PaymentMethodModel();

        $detailProduct = $itemModel->join('categories', 'categories.id = items.id_cats')->where('slug', $slug)->first();
        $products = $productModel->join('items', 'items.id = products.id_item')->where('slug', $slug)->findAll();
        $methods = $payMethods->findAll();

        $session = session();
        $user_id = $session->get('user_id');

        return view('order', compact('setting', 'user_id', 'detailProduct', 'products', 'methods'));
    }

    public function confirmInvoice(){
        helper('checkidgame');

        $random = Random::get(15, Code::FORMAT_ALNUM_CAPITAL);
        $categoryProduct = $this->request->getPost('category');
        $serviceName = $this->request->getPost('service');
        $IdSendTo = $this->request->getPost('player');
        $servID = $this->request->getPost('server');
        $payMethod = $this->request->getPost('payment');
        $price = $this->request->getPost('pricing');
        $skuCode = $this->request->getPost('skucode');

        // Masukkan API Key Anda
        $apiKey = 'KaZTT2Hn6fEXDLTy1Lm3E48kcsiA2esT4V1tRDH0QOeaZsDbB6t4UaUuCVMpD5JE';

        // Masukkan API ID Anda
        $apiId = '7iZkyT0X';

        // Masukkan data yang diperlukan
        $requestData = [
            'type' => 'get-nickname',
            'code' => 'mobile-legends',
            'target' => $IdSendTo,
            'additional_target' => $servID
        ];

        // URL Endpoint
        $url = 'https://vip-reseller.co.id/api/game-feature';

        // Panggil helper untuk melakukan request API
        $response = checkidgame($apiKey, $apiId, $requestData, $url);

        if ($response['result'] == null) {

            $session = session();
            $session->setFlashdata('notif', $response['message']); // respond dari check id game

            return redirect()->back();
        } else {
            if ($servID === null) {
                $dataPost = [
                    'hash_transaction'  => $random,
                    'category'  => $categoryProduct,
                    'service'   => $serviceName,
                    'id_player' => $IdSendTo,
                    'methods_pay'   => $payMethod,
                    'price'  => $price,
                    'order_status'  => "pending",
                    'sku_code'   => $skuCode,
                ];
            } else {
                $dataPost = [
                    'hash_transaction'  => $random,
                    'category'  => $categoryProduct,
                    'service'   => $serviceName,
                    'id_player' => $IdSendTo,
                    'server' => $servID,
                    'methods_pay'   => $payMethod,
                    'price'  => $price,
                    'order_status'  => "pending",
                    'sku_code'   => $skuCode,
                ];
            }
        }

        $invoiceModel = new InvoiceModel();
        $invoiceModel->insert($dataPost);

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
        if ($invoiceResult && $invoiceResult['methods_pay'] == 6) {
            // Jika methods_pay == 6,
            return view('manual-purchase', compact('setting', 'user_id', 'invoiceResult'));
        } else {
            // Jika methods_pay bukan 6,
            return view('purchase', compact('setting', 'user_id', 'invoiceResult'));
        }

    }

    public function runPayment(){
        $apiKey = 'DEV-69p1qCV3m54d5zNcUhkciM7YphqBhE6V4I0eSrXR';
        $privateKey   = 'Mgg9k-JZxfv-8pwnV-XRAcX-dIn7M';
        $merchantCode = 'T15728';
        
        $merchantRef  = $this->request->getPost('reffcode');
        $methodPay = $this->request->getPost('method');
        $amount       = 4800;

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
                    'name'        => 'Mobile Legend',
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

}
