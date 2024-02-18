
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Forums</title>
    <link rel="stylesheet" href="styles.css"> <!-- Include your CSS file -->
</head>
<body>
    <header>
        <!-- Navigation bar or header content -->
        <h1>Community Forums</h1>
    </header>
    <main>
        <div class="forums-container">
            <!-- Forum posts content -->
            <h2>Recent Forum Posts</h2>
            <?php
            // Fetch recent forum posts from backend API
            $forumPosts = fetchForumPosts(); // Function to fetch forum posts from backend API

            // Display each forum post
            foreach ($forumPosts as $post) {
                echo '<div class="forum-post">';
                echo '<h3>' . $post['title'] . '</h3>';
                echo '<p>' . $post['content'] . '</p>';
                echo '<span>Posted by ' . $post['author'] . ' on ' . $post['date'] . '</span>';
                echo '</div>';
            }
            ?>
        </div>
    </main>
    <script src="scripts.js"></script> <!-- Include your JavaScript file -->
</body>
</html>
