<?php

namespace App\Controllers;
use App\Models\SettingModel;
use App\Models\ItemModel;
use App\Models\ProductModel;
use App\Models\PaymentMethodModel;
use App\Models\InvoiceModel;

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

        return view('home', compact('setting', 'dataItems'));
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

        return view('order', compact('setting', 'detailProduct', 'products', 'methods'));
    }

    public function confirmInvoice(){
        $random = Random::get(15, Code::FORMAT_ALNUM_CAPITAL);
        $categoryProduct = $this->request->getPost('category');
        $serviceName = $this->request->getPost('service');
        $IdSendTo = $this->request->getPost('player');
        $servID = $this->request->getPost('server');
        $payMethod = $this->request->getPost('payment');
        $price = $this->request->getPost('pricing');

        if ($servID === null) {
            $dataPost = [
                'hash_transaction'  => $random,
                'category'  => $categoryProduct,
                'service'   => $serviceName,
                'id_player' => $IdSendTo,
                'methods_pay'   => $payMethod,
                'price'  => $price,
                'status'  => "0",
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
                'status'  => "0",
            ];
        }

        $invoiceModel = new InvoiceModel();
        $invoiceModel->insert($dataPost);

        return redirect()->to('invoice/' . $random);
    }

    public function purchase($random)
    {
        $setting = $this->setting;
        $invoiceModel = new InvoiceModel();
        $random;    // String CIS77PMVG1I3A5F
        $invoiceResult = $invoiceModel
            ->join('categories', 'categories.id = invoices.category')
            ->join('items', 'items.id = invoices.service')
            ->join('payment_methods', 'payment_methods.id = invoices.methods_pay')
            ->where('hash_transaction', $random)
            ->first();

        return view('purchase', compact('setting', 'invoiceResult'));
    }

    public function runPayment(){
        $apiKey = 'DEV-ZxAk4Ak5l8Y6EboltfYD4MoHS9bktTI8G0ULms8I';
        $privateKey   = 'Rs6R6-T8HIk-2Er37-r0mY8-uvH5w';
        $merchantCode = 'T15728';
        $merchantRef  = 'INV55567';
        $amount       = 500000;
        
        $data = [
            'method'         => 'BRIVA',
            'merchant_ref'   => $merchantRef,
            'amount'         => $amount,
            'customer_name'  => 'Nama Pelanggan',
            'customer_email' => 'emailpelanggan@domain.com',
            'customer_phone' => '081234567890',
            'order_items'    => [
                [
                    'sku'         => 'FB-06',
                    'name'        => 'Nama Produk 1',
                    'price'       => 500000,
                    'quantity'    => 1,
                    'product_url' => 'https://tokokamu.com/product/nama-produk-1',
                    'image_url'   => 'https://tokokamu.com/product/nama-produk-1.jpg',
                ],
            ],
            'return_url'   => 'https://domainanda.com/redirect',
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
        
        dd($response);
    }

    public function callback(){
        /* privatekey Tripay **/
        $privateKey = 'Rs6R6-T8HIk-2Er37-r0mY8-uvH5w';
                
        /* membaca seluruh data JSON yang diterima melalui input PHP dan menyimpannya dalam variabel $json. **/
        $json = file_get_contents('php://input');
    
        /* mengambil tanda tangan yang dikirim oleh payment gateway dari header HTTP HTTP_X_CALLBACK_SIGNATURE. **/
        $callbackSignature = $this->request->getServer('HTTP_X_CALLBACK_SIGNATURE');
    
        /*  Tanda tangan HMAC (Hash-based Message Authentication Code) dihasilkan menggunakan algoritma SHA-256
            dengan menggunakan data JSON yang diterima dan kunci rahasia sebagai kunci.
            Ini adalah langkah penting dalam verifikasi callback.
        **/
        $signature = hash_hmac('sha256', $json, $privateKey);
    
        /*  Pada blok ini, tanda tangan yang diterima dibandingkan dengan tanda tangan yang dihasilkan.
            Jika tanda tangan tidak cocok, maka respon dengan pesan "Invalid signature" dikirim ke gateway.
        **/
        if ($callbackSignature !== $signature) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Invalid signature'
            ]);
        }
    
        // Data JSON yang diterima di-decode menjadi bentuk objek PHP.
        $data = json_decode($json);
    
        if (json_last_error() !== JSON_ERROR_NONE) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Invalid data sent by payment gateway'
            ]);
        }
    
        /*  Kode ini memeriksa jenis callback event yang diterima.
            Jika bukan 'payment_status', maka respon dengan pesan "Unrecognized callback event" dikirim.
        */
        if ('payment_status' !== $this->request->getServer('HTTP_X_CALLBACK_EVENT')) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Unrecognized callback event: ' . $this->request->getServer('HTTP_X_CALLBACK_EVENT')
            ]);
        }
    
        // Tentukan nama file untuk menyimpan data JSON
        $file_name = 'callback.json';
        
        // Simpan data JSON ke file
        if (file_put_contents($file_name, $json) !== false) {
            // Kembalikan responnya ke payment gateway bahwa callback berhasil
            return $this->response->setJSON([
                'success' => true,
                'message' => 'Callback received and processed successfully'
            ]);
        } else {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Failed to save callback data to JSON file'
            ]);
        }
    }
}
