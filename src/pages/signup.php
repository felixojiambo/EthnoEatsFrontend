<?php
// signup.php

// Start the session
session_start();

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["signup"])) {
    // Input validation
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    // Check if username, email, and password are not empty
    if (empty($username) || empty($email) || empty($password)) {
        echo "Please enter all required fields.";
        exit;
    }

    // Data to send in the POST request
    $data = array(
        "username" => $username,
        "email" => $email,
        "password" => $password
    );

    // Convert data to JSON format
    $payload = json_encode($data);

    // URL of the registration endpoint
    $url = "https://yourdomain.com/api/auth/signup"; // Use HTTPS for security

    // Initialize cURL session
    $ch = curl_init($url);

    // Set cURL options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

    // Execute the cURL session
    $response = curl_exec($ch);

    // Check for cURL errors
    if (curl_errno($ch)) {
        echo "Error: " . curl_error($ch);
        exit;
    }

    // Close cURL session
    curl_close($ch);

    // Decode the JSON response
    $responseData = json_decode($response);

    // Check if registration was successful
    if ($responseData && isset($responseData->message) && $responseData->message == 'User created successfully') {
        // Registration successful, redirect to login page or dashboard
        header("Location: login.php");
        exit;
    } else {
        // Registration failed, display error message
        echo "Registration failed. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <h2>Sign Up</h2>
    <form method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit" name="signup">Sign Up</button>
    </form>
</body>
</html>
