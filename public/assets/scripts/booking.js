document.getElementById('booking-form').addEventListener('submit', function(event) {
    event.preventDefault();

    const date = document.getElementById('date').value;
    const time = document.getElementById('time').value;
    const partySize = document.getElementById('party-size').value;

    const bookingData = {
        date: date,
        time: time,
        partySize: partySize
    };

    fetch('/api/bookings', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(bookingData)
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Redirect to a confirmation page or display a success message
            window.location.href = 'confirmation.html';
        } else {
            // Display an error message
            alert('Booking failed: ' + data.message);
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('An error occurred while booking.');
    });
});
