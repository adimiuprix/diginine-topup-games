<?php

/**
 * Helper untuk melakukan pemanggilan API ke https://v1.apigames.id/merchant/YOUR-MERCHANT-ID?signature=YOUR-SIGNATURE-HERE
 *
 * @param string $merchantId ID Merchant Anda
 * @param string $signature Signature Anda
 *
 * @return array Hasil dari API
 */

function checkidgame($merchantId, $serviceName, $IdSendTo, $signature)
{
    // Ganti `YOUR-MERCHANT-ID` dan `YOUR-SIGNATURE-HERE` dengan nilai Anda
    $url = "https://v1.apigames.id/merchant/$merchantId/cek-username/$serviceName?user_id=$IdSendTo&signature=$signature";

    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        throw new Exception('Error saat melakukan pemanggilan API: ' . curl_error($ch));
    }

    curl_close($ch);

    $result = json_decode($response, true);

    if (!$result) {
        throw new Exception('Error saat parsing JSON: ' . json_last_error_msg());
    }

    return $result;
}