<?php
function renderAlert($message, $type = 'info') {
    $sanitizedMessage = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
    echo "<div class='alert alert-$type'>$sanitizedMessage</div>";
}
?>
