<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TransactionModel;
use App\Models\InvoiceModel;
use App\Models\UsersModel;
use App\Models\DepositModel;
use App\Models\TripayModel;
use App\Models\Admin\DigiflazzModel;

class TripayController extends BaseController
{
    public function callback()
    {
        // instansiasi seluruh class model yang di perlukan
        $transactionModel = new TransactionModel();
        $depositModel = new DepositModel();
        $userModel = new UsersModel();
        $invoiceModel = new InvoiceModel();
        $tripayModel = new TripayModel();
        $tripay = $tripayModel->first();
        $digiFlazz = new DigiflazzModel();

        // Ambil data JSON
        $json = file_get_contents('php://input');

        // Validasi apakah JSON berhasil dibaca
        if ($json === false) {
            http_response_code(400);
            exit(json_encode([
                'success' => false,
                'message' => 'Failed to read JSON data',
            ]));
        }

        // Ambil callback signature
        $callbackSignature = isset($_SERVER['HTTP_X_CALLBACK_SIGNATURE']) ? $_SERVER['HTTP_X_CALLBACK_SIGNATURE'] : '';

        // Isi dengan private key anda
        $privateKey = $tripay['private_key'];

        // Generate signature untuk dicocokkan dengan X-Callback-Signature
        $signature = hash_hmac('sha256', $json, $privateKey);

        // Validasi signature
        if ($callbackSignature !== $signature) {
            http_response_code(401); // Unauthorized
            exit(json_encode([
                'success' => false,
                'message' => 'Invalid signature',
            ]));
        }

        // Dekode JSON
        $dataCallback = json_decode($json, true);

        // Simpan data ke dalam database
        $insertData = [
            'reference' => $dataCallback['reference'],
            'merchant_ref' => $dataCallback['merchant_ref'],
            'payment_method' => $dataCallback['payment_method'],
            'payment_method_code' => $dataCallback['payment_method_code'],
            'total_amount' => $dataCallback['total_amount'],
            'fee_merchant' => $dataCallback['fee_merchant'],
            'fee_customer' => $dataCallback['fee_customer'],
            'total_fee' => $dataCallback['total_fee'],
            'amount_received' => $dataCallback['amount_received'],
            'is_closed_payment' => $dataCallback['is_closed_payment'],
            'status' => $dataCallback['status'],
            'paid_at' => date('Y-m-d H:i:s', $dataCallback['paid_at']),
            'note' => $dataCallback['note']
        ];
        $transactionModel->insert($insertData);

        $stats = "success";  // Nilai baru
        $hash_trx = $dataCallback['merchant_ref'];  // 7YP5GK23NXNW6YQ dari callback

        // blok pemroses data invoice
        try{
            $db = \Config\Database::connect(); // Mengambil koneksi database
            $db->transStart();

            // Melakukan proses invoice.
            $result = $invoiceModel->where('hash_transaction', $hash_trx)->first();
            // Melakukan update data pending jadi success jika ketemu.
            if ($result) {
                $invoiceModel->update($result['id_invoice'], [
                    'order_status' => $stats
                ]);

                $digiFlazz = new DigiflazzModel();
                $df = $digiFlazz->first();
                // Informasi sensitif
                $username = $df['username'];
                $apikey = $df['api_key'];

                // Data permintaan API
                $data = [
                    'ref_id' => $result['hash_transaction'],
                    'username' => $username,
                    'buyer_sku_code' => $result['sku_code'],
                    'customer_no' => "0895359738286",
                ];

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
                curl_close($ch);

            }

            $db->transComplete();
        }catch (\Exception $e){
            log_message('error', $e->getMessage());
        }

        // blok pemroses data deposit
        try{
            $db = \Config\Database::connect(); // Mengambil koneksi database

            /* bagian ini transStart() merupakan fungsi bawaan CI4 untuk melakukan perhitungan
            independen agar tidak terjadi benturan pada kedua tugas yang berbeda
            penting untuk menutup blok fungsi dengan transComplete() */
            $db->transStart();

            // Melakukan proses untuk deposit
            $usrdepo = $depositModel->where('hash_id', $hash_trx)->first();
            $depositModel->update($usrdepo['id'], [
                'deposit_status' => $stats
            ]);
            $deposit = $userModel->find($usrdepo['user_id']);
            if ($deposit) {
                $newBalance = $deposit['balance'] + $usrdepo['amount'];
                $userModel->update($deposit['id'], [
                    'balance' => $newBalance
                ]);
            }

            $db->transComplete();
        }catch (\Exception $e){
            log_message('error', $e->getMessage());
        }

        // $file_path = 'public/data.json';
        // $json_data = json_encode($user, JSON_PRETTY_PRINT);   // dd datanya
        // file_put_contents($file_path, $json_data);

        // Kirim respons berhasil
        http_response_code(200);
        exit(json_encode([
            'success' => true,
            'message' => 'Callback telah di terima dan proses berhasil.',
        ]));
    }
}