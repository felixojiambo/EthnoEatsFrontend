<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Recommendations</title>
    <link rel="stylesheet" href="styles.css"> <!-- Include your CSS file -->
</head>
<body>
    <header>
        <h1>Restaurant Recommendations</h1>
    </header>
    <main>
        <div id="recommendations-container"></div>
    </main>
    <script>
        function fetchRecommendations(userId) {
            fetch('/api/recommendations/' + userId)
                .then(response => response.json())
                .then(recommendations => {
                    const container = document.getElementById('recommendations-container');
                    recommendations.forEach(recommendation => {
                        const card = document.createElement('div');
                        card.className = 'recommendation-card';
                        card.innerHTML = `
                            <img src="${recommendation.image}" alt="${recommendation.name}">
                            <h2>${recommendation.name}</h2>
                            <p>${recommendation.description}</p>
                            <span>Rating: ${recommendation.rating}</span>
                            <button onclick="likeRecommendation(${recommendation.id})">Like</button>
                            <button onclick="saveRecommendation(${recommendation.id})">Save</button>
                        `;
                        container.appendChild(card);
                    });
                })
                .catch(error => console.error('Error fetching recommendations:', error));
        }

        function likeRecommendation(recommendationId) {
            // Implement the logic to like a recommendation
            console.log('Liked recommendation:', recommendationId);
        }

        function saveRecommendation(recommendationId) {
            // Implement the logic to save a recommendation
            console.log('Saved recommendation:', recommendationId);
        }

        // Fetch recommendations for a user when the page loads
        const userId = 'exampleUserId'; // Replace with actual user ID
        fetchRecommendations(userId);
    </script>
</body>
</html>
