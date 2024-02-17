<?php
// src/pages/forgot-password.php

// Include the necessary utility functions
require_once __DIR__ . '/../utils/InputUtils.php';

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize the input data
    $email = sanitizeInput($_POST['email']);
    $phoneNumber = sanitizeInput($_POST['phoneNumber']);

    // Call the forgot password service
    $response = forgotPasswordService($email, $phoneNumber);

    // Handle the response (e.g., display a success message or handle errors)
    if ($response['success']) {
        echo 'Password reset request sent successfully.';
    } else {
        echo 'Error: ' . $response['message'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
</head>
<body>
    <h1>Forgot Password</h1>
    <form action="forgot-password.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="phoneNumber">Phone Number:</label>
        <input type="tel" id="phoneNumber" name="phoneNumber" required>
        <br>
        <input type="submit" value="Request Password Reset">
    </form>
</body>
</html>
