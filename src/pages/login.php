<!-- Include header component -->
<?php require_once __DIR__ . '/../components/Header.php'; ?>

<!-- Login page content -->
<div class="container">
    <h2>Login to Your Account</h2>
    <form action="login-handler.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Login</button>
    </form>
    <!-- Add more content as needed -->
</div>

<!-- Include footer component -->
<?php require_once __DIR__ . '/../components/Footer.php'; ?>


//<?php
// Include the renderButton function
//require_once __DIR__ . '/../src/components/Button.php';

// Use the renderButton function to output the "Login" button
//renderButton('Login', 'submitLoginForm()', 'btn btn-primary');
//?>
