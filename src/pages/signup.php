<?php
// login.php

// Start the session
session_start();

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["login"])) {
    // Input validation
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    // Check if username and password are not empty
    if (empty($username) || empty($password)) {
        echo "Please enter both username and password.";
        exit;
    }

    // Data to send in the POST request
    $data = array(
        "username" => $username,
        "password" => $password
    );

    // Convert data to JSON format
    $payload = json_encode($data);

    // URL of the login endpoint
    $url = "https://yourdomain.com/api/auth/login"; // Use HTTPS for security

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

    // Check if authentication was successful
    if ($responseData && isset($responseData->token)) {
        // Authentication successful, save token and redirect to dashboard or home page
        $token = $responseData->token;
        // You can save the token in session or cookies for future requests
        $_SESSION['token'] = $token; // Save the token in session
        // Redirect to dashboard or home page
        header("Location: dashboard.php");
        exit;
    } else {
        // Authentication failed, display error message
        echo "Login failed. Please check your credentials.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>
