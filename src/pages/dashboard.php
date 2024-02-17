<?php
// Check if the user is logged in
session_start();
if (!isset($_SESSION["token"])) {
    // Redirect to login page if user is not logged in
    header("Location: login.php");
    exit;
}

// Retrieve user information from session
$username = $_SESSION["username"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Include the stylesheet -->
    <link rel="stylesheet" href="/assets/styles/styles.css">
</head>
<body>
    <!-- Add a background image -->
    <div style="background-image: url('/assets/images/background.jpg'); background-size: cover;">
        <h1>Welcome, <?php echo $username; ?>!</h1>
        <p>This is your dashboard. You can manage your profile, explore cuisines, view recommendations, and more.</p>

        <!-- Add additional dashboard content as needed -->

        <a href="logout.php">Logout</a>
    </div>

    <!-- Include the script -->
    <script src="/assets/scripts/scripts.js"></script>
</body>
</html>
