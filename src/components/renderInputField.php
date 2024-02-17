<?php
function renderInputField($name, $placeholder, $value = '', $type = 'text') {
    $sanitizedName = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
    $sanitizedPlaceholder = htmlspecialchars($placeholder, ENT_QUOTES, 'UTF-8');
    $sanitizedValue = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    echo "<input type='$type' name='$sanitizedName' placeholder='$sanitizedPlaceholder' value='$sanitizedValue'>";
}
?>
