<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SettingModel;
use App\Models\InvoiceModel;
use App\Models\UsersModel;
use App\Models\DepositModel;
use App\Models\WithdrawModel;
use App\Models\Admin\ReviewModel;

use ShortCode\Random;
use ShortCode\Code;

class UserServiceController extends BaseController
{
    private $setting;
    private $reviews;

    public function __construct(){
        $GeneralSetting = new SettingModel();
        $this->setting = $GeneralSetting->first();

        $reviewModel = new ReviewModel();
        $this->reviews = $reviewModel->findAll();
    }

    public function index()
    {
        $setting = $this->setting;
        $reviews = $this->reviews;

        $session = session();
        $userData = $session->get('user_id');

        $userModel = new UsersModel();
        $username = $session->get('username');
        $detailUser = $userModel->find($userData);

        $InvoiceModel = new InvoiceModel();

        $totInvoice = $InvoiceModel->where('id_buyer', $userData)->countAllResults();
        $procesingInvoice = $InvoiceModel->where('id_buyer', $userData)->where('order_status', 'pending')->countAllResults();
        $successInvoice = $InvoiceModel->where('id_buyer', $userData)->where('order_status', 'success')->countAllResults();
        $failInvoice = $InvoiceModel->where('id_buyer', $userData)->where('order_status', 'failed')->countAllResults();

        // Daftar semua transaksi di dashboard
        $invoices = $InvoiceModel
            ->where('id_buyer', $userData)
            ->join('items', 'items.id = invoices.service')
            ->findAll();

        // Daftar semua riwayat transaksi
        $transactions = $InvoiceModel
            ->where('id_buyer', $userData)
            ->join('items', 'items.id = invoices.service')
            ->where('order_status', 'success')
            ->findAll();

        // Daftar semua deposit
        $depositModel = new DepositModel();
        $deposits = $depositModel->where('user_id', $userData)->findAll();

        // Daftar semua deposit
        $withdrawModel = new WithdrawModel();
        $withdraws = $withdrawModel->where('user_id', $userData)->findAll();

        return view('userpage/user-area',
         compact(
        'setting',
        'username',
        'userData',
        'detailUser',
        'totInvoice',
        'procesingInvoice',
        'successInvoice',
        'failInvoice',
        'invoices',
        'transactions',
        'deposits',
        'withdraws'
        ));
    }

    public function topupBalance(){
        $depositModel = new DepositModel();

        $session = session();
        $randomHash = Random::get(15, Code::FORMAT_ALNUM_CAPITAL);
        $amount = $this->request->getPost('amount');
        $method = $this->request->getPost('method');

        $merchantRef  = $randomHash;
        $methodPay = $method;
        $amountfloat       = $amount;
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
                    'sku'         => 'deposit akun',
                    'name'        => 'deposit',
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
        $reference = $decodeData['data']['reference'];

        $deposit = [
            'user_id' => $session->get('user_id'),
            'amount' => $amount,
            'method'  => $method,
            'hash_id'  => $randomHash,
            'reference' => $reference,
            'deposit_status' => 'pending'
        ];
        $depositModel->insert($deposit);

        return redirect()->to($checkoutUrl);
    }

    public function deposit(){
        $setting = $this->setting;
        $session = session();
        $userData = $session->get('user_id');

        return view('userpage/deposit-form', compact('setting'));
    }

    public function profile(){
        $setting = $this->setting;
        $session = session();
        $userData = $session->get('user_id');
        $username = $session->get('username');

        $userModel = new UsersModel();
        $username = $session->get('username');
        $profile = $userModel->find($userData);

        return view('userpage/profile', compact('setting', 'username', 'userData', 'profile'));
    }

    public function withdraws(){
        $bankTo = $this->request->getPost('bank');
        $amountWd = $this->request->getPost('amount');
        $random = Random::get(15, Code::FORMAT_ALNUM_CAPITAL);

        $session = session();
        $userID = $session->get('user_id');
        $userModel = new UsersModel();
        $checkbalance = $userModel->find($userID);
        $balance = $checkbalance['balance'];

        if($balance <= $amountWd){
            return redirect()->back();
        }

        $WithdrawData = [
            'user_id' => $userID,
            'amount' => $amountWd,
            'bank_to' => $bankTo,
            'hash' => $random,
            'withdraw_status' => 'pending',
        ];
        $wdModel = new WithdrawModel();
        $wdModel->insert($WithdrawData);

        $userModel = new UsersModel();
        $newBalance = $balance - $amountWd;
        $userModel->update($userID, [
            'balance' => $newBalance
        ]);

        return redirect('dashboard');
    }

    public function profileChange(){
        $request = service('request');
        $session = session();

        $userModel = new UsersModel();

        $userId = $session->get('user_id');
        $userData = $userModel->find($userId);

        if (!$userData) {
            // Handle user not found
            return redirect()->back()->with('error', 'User not found.');
        }

        $email = $request->getPost('chemail');
        $whatsapp = $request->getPost('chwhatsapp');
        $password = $request->getPost('chpassword');

        // Update other fields if provided
        if ($email) {
            $dataUpdate['email'] = $email;
        }
        if ($whatsapp) {
            $dataUpdate['whatsapp_number'] = $whatsapp;
        }
        if ($password) {
            // Hash the password before saving
            $dataUpdate['password'] = password_hash($password, PASSWORD_DEFAULT);
        }

        // Perform update only if there's something to update
        if (!empty($dataUpdate)) {
            $userModel->update($userId, $dataUpdate);
        }

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }
}