<?php

/**
 * Helper untuk melakukan pemanggilan API ke https://v1.apigames.id/merchant/YOUR-MERCHANT-ID?signature=YOUR-SIGNATURE-HERE
 *
 * @param string $merchantId ID Merchant Anda
 * @param string $signature Signature Anda
 *
 * @return array Hasil dari API
 */

function checkidgame($apiKey, $apiId, $requestData, $url)
 {
     // Set data yang diperlukan
     $data = array(
         'key' => $apiKey,
         'sign' => md5($apiId . $apiKey),
         'type' => $requestData['type'],
         'code' => $requestData['code'],
         'target' => $requestData['target'],
         'additional_target' => $requestData['additional_target']
     );

     // Pengaturan cURL
     $ch = curl_init($url);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     curl_setopt($ch, CURLOPT_POST, true);
     curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

     // Eksekusi request
     $response = curl_exec($ch);

     // Cek jika terjadi kesalahan
     if ($response === false) {
         return ['success' => false, 'message' => 'Error: ' . curl_error($ch)];
     } else {
         // Parsing response JSON
         $responseData = json_decode($response, true);

         // Tutup koneksi cURL
         curl_close($ch);

         return $responseData;
     }
 }