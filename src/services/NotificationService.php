<?php
// src/services/NotificationService.php

function getUserNotifications($userId) {
    $url = "https://yourdomain.com/api/notifications/user/$userId";
    return sendRequest('GET', $url);
}

// ... (sendRequest function)
?>
