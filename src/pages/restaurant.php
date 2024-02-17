<?php
// Start the session
session_start();

// Include necessary files and components
require_once __DIR__ . '/../components/Header.php';
require_once __DIR__ . '/../components/Footer.php';

// Define the base URL for the API
$baseUrl = 'https://yourdomain.com/api/restaurants'; // Use HTTPS for security

// Function to get all restaurants
function getAllRestaurants() {
    global $baseUrl;
    try {
        $response = file_get_contents($baseUrl);
        $restaurants = json_decode($response, true);
        return $restaurants;
    } catch (Exception $e) {
        // Handle exceptions, such as network errors
        echo "Error: " . $e->getMessage();
        return null;
    }
}

// Function to get a restaurant by ID
function getRestaurantById($id) {
    global $baseUrl;
    try {
        $response = file_get_contents($baseUrl . '/' . intval($id)); // Cast to int for security
        $restaurant = json_decode($response, true);
        return $restaurant;
    } catch (Exception $e) {
        // Handle exceptions, such as network errors
        echo "Error: " . $e->getMessage();
        return null;
    }
}

// Function to create a new restaurant
function createRestaurant($restaurant) {
    global $baseUrl;
    // Validate input (e.g., check for required fields, sanitize data)
    // ...

    try {
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($restaurant)
            )
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($baseUrl, false, $context);
        return json_decode($result, true);
    } catch (Exception $e) {
        // Handle exceptions, such as network errors
        echo "Error: " . $e->getMessage();
        return null;
    }
}

// Function to update an existing restaurant
function updateRestaurant($id, $restaurant) {
    global $baseUrl;
    // Validate input (e.g., check for required fields, sanitize data)
    // ...

    try {
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'PUT',
                'content' => http_build_query($restaurant)
            )
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($baseUrl . '/' . intval($id), false, $context); // Cast to int for security
        return json_decode($result, true);
    } catch (Exception $e) {
        // Handle exceptions, such as network errors
        echo "Error: " . $e->getMessage();
        return null;
    }
}

// Function to delete a restaurant
function deleteRestaurant($id) {
    global $baseUrl;
    try {
        $options = array(
            'http' => array(
                'method'  => 'DELETE'
            )
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($baseUrl . '/' . intval($id), false, $context); // Cast to int for security
        return json_decode($result, true);
    } catch (Exception $e) {
        // Handle exceptions, such as network errors
        echo "Error: " . $e->getMessage();
        return null;
    }
}

// Main content of the page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Management</title>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>

</head>
<body>
    <h1>Restaurant Management</h1>
    <!-- Add content to display and manage restaurants -->

    <!-- Include footer component -->
    <?php require_once __DIR__ . '/../components/Footer.php'; ?>
</body>
</html>



//<?php
// Include the renderButton function
//require_once __DIR__ . '/../src/components/Button.php';

// Use the renderButton function to output a button for adding a review
//renderButton('Add Review', 'openAddReviewModal()', 'btn btn-secondary');

// Use the renderButton function to output a button for reserving a table
//renderButton('Reserve Table', 'openReserveTableModal()', 'btn btn-success');
//?>
