<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SettingModel;
use App\Models\InvoiceModel;
use App\Models\ApiGameModel;
use App\Models\UsersModel;
use App\Models\TripayModel;

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
        $balanceUsr = new UsersModel();

        if($payMethod == 1){
            if ($buyer !== null) {
                $checkbalance = $balanceUsr->find($buyer);
                $balance = $checkbalance['balance'];

                if($balance <= $price){
                    return redirect()->back();
                }
            }else{
                return redirect()->to('login');
            }
        };

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
                'login_via' => $this->request->getPost('login_via'),    // Login via
                'uid_nickname' => $this->request->getPost('uid_nickname'),    // User ID & Nick Name
                'account_detail' => $this->request->getPost('account_detail'),  // Email/No. Hp/Moonton ID
                'password' => $this->request->getPost('password'),  // Password
                'req_hero' => $this->request->getPost('req_heroword'),  // Request Hero
                'notice' => $this->request->getPost('notice'),  // Catatan Untuk Penjoki
                'user_id' => $this->request->getPost('user_id'),    // User ID
                'server' => $this->request->getPost('server'),  // Server Game
                'nickname_&_user_ig'  => $this->request->getPost('nick_user_ig'),   // Nickname & Instagram
                'comentary'  => $this->request->getPost('comentary'),  // Contoh Komentar
                'gift_skin'  => $this->request->getPost('gift_skin'),   // Nama Skin/Item/Kharisma
                'hour_tournament'  => $this->request->getPost('hour_tournament'),   // Jam (HH:MM)
                'date_tournament'  => $this->request->getPost('date_tournament'),   // Tanggal (HH-BB-TTTT)
                'price'  => $price,
                'order_status'  => "pending",
                'sku_code'   => $skuCode,
            ];
            // dd($dataPost);
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

        $session = session();
        $buyer = $session->get('user_id');

        if($methodPay == "Saldo Akun"){
            if ($buyer !== null) {
                $balanceUsr = new UsersModel();
                $checkbalance = $balanceUsr->find($buyer);
                $balance = $checkbalance['balance'];

                if($balance >= $amountfloat){
                    $newBalance = $balance - $amountfloat;
                    $balanceUsr->update($buyer, ['balance' => $newBalance]);

                    // Digiflazz jalankan

                    // Informasi sensitif
                    $username = "cazekoD7ELKg";
                    $apikey = "a3bd1141-63f8-5885-9d9a-c52bbcf2c97b";

                    // Data permintaan API
                    $data = array(
                        'ref_id' => strtoupper(hash('sha256', time() * rand(1, 1000))),
                        'username' => $username,
                        'buyer_sku_code' => "DANA5",
                        'customer_no' => "0895359738286",
                    );

                    // Menambahkan sign ke data permintaan
                    $data['sign'] = md5($username . $apikey . $data['ref_id']);

                    // Mengirim permintaan ke API
                    $ch = curl_init('https://api.digiflazz.com/v1/transaction');
                    curl_setopt_array($ch, [
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_POST => true,
                        CURLOPT_POSTFIELDS => json_encode($data),
                        CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
                    ]);
                    $response = curl_exec($ch);
                    curl_close($ch);

                    return redirect()->back();
                }
            }else{
                return redirect()->back();
            }
        };

        $tripayModel = new TripayModel();
        $triPay = $tripayModel->first();

        $merchantCode = $triPay['merchant_id'];
        $apiKey = $triPay['api_key'];
        $privateKey   = $triPay['private_key'];

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

        $decodeData = json_decode($response, true);
        $checkoutUrl = $decodeData['data']['checkout_url'];
        return redirect()->to($checkoutUrl);
    }
}
