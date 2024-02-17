<?php
function renderButton($text, $onClick = null, $className = '') {
    // Sanitize the text and class name to prevent XSS
    $sanitizedText = htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
    $sanitizedClassName = htmlspecialchars($className, ENT_QUOTES, 'UTF-8');

    // Output the button with sanitized values
    echo "<button class='$sanitizedClassName' onclick='$onClick'>$sanitizedText</button>";
}
?>
