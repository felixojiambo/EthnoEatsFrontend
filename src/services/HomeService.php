<?php
// src/services/HomeService.php

function getFeaturedContent() {
    $url = "https://yourdomain.com/api/home/featured";
    return sendRequest('GET', $url);
}

// ... (sendRequest function)
?>
