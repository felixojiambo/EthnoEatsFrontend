<?php
// src/utils/InputUtils.php

// Function to sanitize input data
function sanitizeInput($data) {
    return htmlspecialchars(trim($data));
}

// Function to generate a random string
function generateRandomString($length =  10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i =  0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) -  1)];
    }
    return $randomString;
}

// Add more utility functions as needed

?>
