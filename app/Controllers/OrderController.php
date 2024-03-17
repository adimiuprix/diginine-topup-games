<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SettingModel;
use App\Models\InvoiceModel;
use App\Models\ApiGameModel;

use ShortCode\Random;
use ShortCode\Code;

class OrderController extends BaseController
{
    private $setting;
    public function __construct(){
        $GeneralSetting = new SettingModel();
        $this->setting = $GeneralSetting->first();
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
        $buyer = $session->get('user_id');

        if($categoryProduct == 1){
            helper('checkidgame');
            // Panggil fungsi untuk melakukan pengecekan akun game
            $apiGameModel = new ApiGameModel();
            $apiGameData = $apiGameModel->getApiGameData();

            $merchant_id = $apiGameData['merchant_id'];
            $secret_key = $apiGameData['secret_key'];
            $game_code = $gameCode;
            $user_id = $IdSendTo;
            $server_id = $servID;

            if ($game_code == 'mobilelegend') {
                $response = mobilelegendvalidate($merchant_id, $game_code, $user_id, $server_id, $secret_key);
            }elseif ($game_code == 'higgs' || $game_code == 'freefire') {
                $response = normalvalidate($merchant_id, $game_code, $user_id, $secret_key);
            }elseif ($game_code == '') {
                $response['status'] = 1;
            };

            // Jika respond nya bernilai 1
            if ($response['status'] == 1) {

                // Siapkan data untuk dimasukkan ke dalam database
                $dataPost = [
                    'id_buyer' => $buyer,
                    'id_player' => $IdSendTo,
                    'hash_transaction'  => $random,
                    'category'  => $categoryProduct,
                    'service'   => $serviceName,
                    'methods_pay'   => $payMethod,
                    'price'  => $price,
                    'order_status'  => "pending",
                    'sku_code'   => $skuCode,
                ];

                // Jika $servID tidak null, tambahkan informasi server ke data
                if (!is_null($servID)) {
                    $dataPost['server'] = $servID;
                }

                // Buat objek InvoiceModel dan masukkan data ke dalam database
                $invoiceModel = new InvoiceModel();
                $invoiceModel->insert($dataPost);
            } else {
                $session = session();
                $session->setFlashdata('notif', $response['error_msg']); // respond dari check id game
                return redirect()->back();
            }
        }elseif($categoryProduct == 2){
            $dataPost = [
                'id_buyer' => $buyer,
                'hash_transaction'  => $random,
                'methods_pay'   => $payMethod,
                'category'  => $categoryProduct,
                'service'   => $serviceName,
                'login_via' => $this->request->getPost('login_via'),
                'account_detail' => $this->request->getPost('account_detail'),
                'password' => $this->request->getPost('password'),
                'notice' => $this->request->getPost('notice'),
                'user_id' => $this->request->getPost('user_id'),
                'server' => $this->request->getPost('server'),
                'password' => $this->request->getPost('password'),
                'nickname_&_user_ig'  => $this->request->getPost('nickname_&_user_ig'),
                'skin'  => $this->request->getPost('skin'),
                'price'  => $price,
                'order_status'  => "pending",
                'sku_code'   => $skuCode,
            ];
            dd($dataPost);
            $invoiceModel = new InvoiceModel();
            $invoiceModel->insert($dataPost);

        }elseif($categoryProduct == 3){
            $dataPost = [
                'id_buyer' => $buyer,
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

        }elseif($categoryProduct == 4){
            $dataPost = [
                'id_buyer' => $buyer,
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
            $dataPost = [
                'id_buyer' => $buyer,
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

        }elseif($categoryProduct == 6){
            $dataPost = [
                'id_buyer' => $buyer,
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
}
