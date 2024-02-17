<?php
// Include necessary files and components
require_once __DIR__ . '/../src/services/AuthService.php'; // Example: Include AuthService
require_once __DIR__ . '/../src/components/Header.php';    // Example: Include Header component
require_once __DIR__ . '/../src/components/Footer.php';    // Example: Include Footer component

// Define routing logic
$page = isset($_GET['page']) ? basename($_GET__['page']) : 'home'; // Default to home page and sanitize input
$validPages = ['home', 'login', 'signup', 'restaurant', 'dashboard', 'review', 'forgot-password', 'logout']; // Define valid pages

// Check if requested page is valid, otherwise redirect to home page
if (!in_array($page, $validPages)) {
    $page = 'home';
}

// Render page content based on requested page
try {
    switch ($page) {
        case 'home':
            require_once __DIR__ . '/../src/pages/Home.php'; // Example: Render Home page
            break;
        case 'login':
            require_once __DIR__ . '/../src/pages/Login.php'; // Example: Render Login page
            break;
        case 'signup':
            require_once __DIR__ . '/../src/pages/Signup.php'; // Example: Render Signup page
            break;
        case 'restaurant':
            require_once __DIR__ . '/../src/pages/Restaurant.php'; // Example: Render Restaurant page
            break;
        case 'dashboard':
            require_once __DIR__ . '/../src/pages/Dashboard.php'; // Render Dashboard page
            break;
        case 'review':
            require_once __DIR__ . '/../src/pages/Review.php'; // Render Review page
            break;
        case 'forgot-password':
            require_once __DIR__ . '/../src/pages/ForgotPassword.php'; // Render Forgot Password page
            break;
        case 'logout':
            require_once __DIR__ . '/../src/pages/Logout.php'; // Render Logout page
            break;
        // Add more cases for other pages as needed
        default:
            // Handle invalid page request
            header('Location: index.php?page=home');
            exit;
    }
} catch (Exception $e) {
    // Handle exceptions, such as file not found errors
    echo "Error: " . $e->getMessage();
    exit;
}
// In a PHP file, e.g., index.php
$apiKey = 'YOUR_API_KEY'; // This should be stored securely on your server
echo '<script async defer src="https://maps.googleapis.com/maps/api/js?key=' . $apiKey . '&callback=initMap"></script>';

// Render header and footer components
renderHeader(); // Example: Render Header component
// Render additional page content here if needed
renderFooter(); // Example: Render Footer component
?>
