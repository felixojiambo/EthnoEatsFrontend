<?php
// src/services/RestaurantService.php

function getAllRestaurants() {
    $url = "https://yourdomain.com/api/restaurants";
    return sendRequest('GET', $url);
}

function getRestaurantById($id) {
    $url = "https://yourdomain.com/api/restaurants/$id";
    return sendRequest('GET', $url);
}

function createRestaurant($data) {
    $url = "https://yourdomain.com/api/restaurants";
    return sendRequest('POST', $url, $data);
}

function updateRestaurant($id, $data) {
    $url = "https://yourdomain.com/api/restaurants/$id";
    return sendRequest('PUT', $url, $data);
}

function deleteRestaurant($id) {
    $url = "https://yourdomain.com/api/restaurants/$id";
    return sendRequest('DELETE', $url);
}

function sendRequest($method, $url, $data = null) {
    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);

    if ($data) {
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    }

    $response = curl_exec($ch);
    curl_close($ch);

    return json_decode($response, true);
}
?>
