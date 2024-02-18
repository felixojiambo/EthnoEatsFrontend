<?php
// charge.php

// Get the Stripe token from the form submission
$token = $_POST['stripeToken'];

// Define the payment details as an associative array
$paymentDetails = [
    'token' => $token,
    'amount' =>  2000, // amount in cents
    'currency' => 'usd',
    'description' => 'Example charge'
];

// Convert the payment details to JSON
$jsonPayload = json_encode($paymentDetails);

// Send the JSON payload to your Spring Boot backend
$ch = curl_init('http://localhost:8080/charge');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonPayload);

$response = curl_exec($ch);
curl_close($ch);

echo $response;
?>
