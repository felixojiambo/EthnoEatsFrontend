<?php
// src/pages/map.php

// Include any necessary PHP code here, such as session handling, database queries, etc.

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EthnoEats - Map</title>
    <link rel="stylesheet" href="/assets/styles/main.css">
    <link rel="stylesheet" href="/assets/styles/map.css">
</head>
<body>
    <!-- Your HTML content for the map page here -->

    <div id="map"></div>
    <input id="search-box" type="text" placeholder="Search for a location">

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
    <script src="/assets/scripts/maps.js"></script>
</body>
</html>
