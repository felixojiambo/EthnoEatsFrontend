<?php
function renderNavbar($links) {
    echo "<nav>";
    echo "<ul>";
    foreach ($links as $link) {
        $sanitizedUrl = htmlspecialchars($link['url'], ENT_QUOTES, 'UTF-8');
        $sanitizedText = htmlspecialchars($link['text'], ENT_QUOTES, 'UTF-8');
        echo "<li><a href='$sanitizedUrl'>$sanitizedText</a></li>";
    }
    echo "</ul>";
    echo "</nav>";
}
?>
