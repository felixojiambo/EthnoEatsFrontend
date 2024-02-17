<?php
// src/utils/DateUtils.php

function format_date($date, $format = 'Y-m-d') {
    return date($format, strtotime($date));
}

// ... (other date utility functions)
?>
