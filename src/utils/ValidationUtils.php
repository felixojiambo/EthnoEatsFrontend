<?php
// src/utils/ValidationUtils.php

function is_valid_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

// ... (other validation utility functions)
?>
