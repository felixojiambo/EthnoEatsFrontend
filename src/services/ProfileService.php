<?php
// src/services/ProfileService.php

function updateUserProfile($userId, $data) {
    $url = "https://yourdomain.com/api/profile/user/$userId";
    return sendRequest('PUT', $url, $data);
}

// ... (sendRequest function)
?>
