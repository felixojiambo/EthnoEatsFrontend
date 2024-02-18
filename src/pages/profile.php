<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile</title>
</head>
<body>
    <?php
    // profile.php

    // Include your database connection script
    require_once 'db_connect.php';

    // Check if user_id is set in the URL
    if (isset($_GET['user_id'])) {
        $user_id = $_GET['user_id'];

        // Retrieve user data from the database
        $sql = "SELECT * FROM users WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        // Close the statement and the connection
        $stmt->close();
        $conn->close();
    } else {
        // Redirect to the registration page if user_id is not set
        header("Location: register.php");
        exit;
    }
    ?>

    <h1>Welcome, <?php echo htmlspecialchars($user['username']); ?>!</h1>
    <p>Email: <?php echo htmlspecialchars($user['email']); ?></p>

    <!-- Add more profile information and management options here -->

</body>
</html>
