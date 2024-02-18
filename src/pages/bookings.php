<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Bookings</title>
    <link rel="stylesheet" href="styles.css"> <!-- Include your CSS file -->
</head>
<body>
    <header>
        <h1>Restaurant Bookings</h1>
    </header>
    <main>
        <div class="booking-form-container">
            <h2>Make a Reservation</h2>
            <form id="booking-form">
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required>
                <label for="time">Time:</label>
                <input type="time" id="time" name="time" required>
                <label for="party-size">Party Size:</label>
                <input type="number" id="party-size" name="party-size" required>
                <button type="submit">Book Now</button>
            </form>
        </div>
    </main>
    <script src="scripts.js"></script> <!-- Include your JavaScript file -->
</body>
</html>
