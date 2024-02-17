<?php
// src/services/LogoutService.php

function logoutUser($token) {
    $url = "https://yourdomain.com/api/auth/logout";
    $headers = array(
        'Authorization: Bearer ' . $token,
        'Content-Type: application/json'
    );
    return sendRequest('POST', $url, null, $headers);
}

function sendRequest($method, $url, $data = null, $headers = array()) {
    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);

    if ($data) {
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    }

    if ($headers) {
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    }

    $response = curl_exec($ch);
    curl_close($ch);

    return json_decode($response, true);
}
?>
