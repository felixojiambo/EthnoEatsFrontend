<?php
// src/services/DashboardService.php

function getUserDashboardData($userId) {
    $url = "https://yourdomain.com/api/dashboard/user/$userId";
    return sendRequest('GET', $url);
}

// ... (sendRequest function)
?>
