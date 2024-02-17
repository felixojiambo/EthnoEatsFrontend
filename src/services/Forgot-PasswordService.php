<?php
// src/services/ForgotPasswordService.php

function forgotPasswordService($email, $phoneNumber) {
    // Define the API endpoint
    $url = "https://yourdomain.com/api/forgot-password/request-reset";

    // Prepare the data to be sent
    $data = array(
        'email' => $email,
        'phoneNumber' => $phoneNumber
    );

    // Send the request to the API
    $response = sendRequest('POST', $url, $data);

    // Check the response and return the result
    if ($response['status'] ===  200) {
        return array('success' => true);
    } else {
        return array('success' => false, 'message' => 'An error occurred.');
    }
}

// Include the sendRequest function
require_once __DIR__ . '/sendRequest.php';
?>
