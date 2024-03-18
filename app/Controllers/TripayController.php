<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TransactionModel;
use App\Models\InvoiceModel;

class TripayController extends BaseController
{
    public function index()
    {
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
        $privateKey = 'Mgg9k-JZxfv-8pwnV-XRAcX-dIn7M';

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
        $transactionModel = new TransactionModel();
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

        // Temukan query berdassarkan hash_transaction
        $invoiceModel = new InvoiceModel();
        $result = $invoiceModel->where('hash_transaction', $hash_trx)->first();

        // Melakukan update data pending jadi success jika ketemu.
        if ($result) {
            $invoiceModel->update($result['id_invoice'], [
                'order_status' => $stats
            ]);
        }

        // $file_path = 'public/data.json';
        // $json_data = json_encode($result, JSON_PRETTY_PRINT);   // dd datanya
        // file_put_contents($file_path, $json_data);

        // Kirim respons berhasil
        http_response_code(200);
        exit(json_encode([
            'success' => true,
            'message' => 'Callback telah di terima dan proses berhasil.',
        ]));
    }
}
