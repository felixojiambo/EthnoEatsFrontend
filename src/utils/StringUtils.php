<?php
// src/utils/StringUtils.php

function string_to_camel_case($string) {
    $result = strtolower($string);
    preg_match_all('/_[a-z]/', $result, $matches);
    foreach ($matches[0] as $match) {
        $c = str_replace('_', '', $match);
        $result = str_replace($match, strtoupper($c), $result);
    }
    return $result;
}

// ... (other string utility functions)
?>
