<?php
// src/services/ReviewService.php

function getAllReviews() {
    $url = "https://yourdomain.com/api/reviews";
    return sendRequest('GET', $url);
}

function getReviewById($id) {
    $url = "https://yourdomain.com/api/reviews/$id";
    return sendRequest('GET', $url);
}

function createReview($data) {
    $url = "https://yourdomain.com/api/reviews";
    return sendRequest('POST', $url, $data);
}

function updateReview($id, $data) {
    $url = "https://yourdomain.com/api/reviews/$id";
    return sendRequest('PUT', $url, $data);
}

function deleteReview($id) {
    $url = "https://yourdomain.com/api/reviews/$id";
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
