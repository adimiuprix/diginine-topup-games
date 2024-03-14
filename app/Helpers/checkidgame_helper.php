<?php

/**
 * Helper untuk melakukan pemanggilan API ke https://v1.apigames.id/merchant/YOUR-MERCHANT-ID?signature=YOUR-SIGNATURE-HERE
 *
 * @param string $merchantId ID Merchant Anda
 * @param string $signature Signature Anda
 *
 * @return array Hasil dari API
 */

function mobilelegendvalidate($merchant_id, $game_code, $user_id, $server_id, $secret_key) {
    $url = "https://v1.apigames.id/merchant/$merchant_id/cek-username/$game_code?user_id=$user_id($server_id)&signature=" . md5($merchant_id . $secret_key);

    // Pengaturan cURL
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

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

// Normal validate di gunakan jika game nya tidak memerlukan serverID
function normalvalidate($merchant_id, $game_code, $user_id, $secret_key) {
    $url = "https://v1.apigames.id/merchant/$merchant_id/cek-username/$game_code?user_id=$user_id&signature=" . md5($merchant_id . $secret_key);

    // Pengaturan cURL
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

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