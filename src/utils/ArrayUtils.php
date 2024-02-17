<?php
// src/utils/ArrayUtils.php

function array_flatten($array) {
    $result = [];
    array_walk_recursive($array, function($a) use (&$result) {
        $result[] = $a;
    });
    return $result;
}

// ... (other array utility functions)
?>
