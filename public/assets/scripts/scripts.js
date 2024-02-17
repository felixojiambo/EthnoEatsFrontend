// public/assets/scripts/scripts.js

document.addEventListener('DOMContentLoaded', function() {
    // Example: Add a class to the body element based on the current page
    // This can be used to apply specific styles to different pages
    var currentPage = document.querySelector('body').getAttribute('data-page');
    if (currentPage) {
        document.body.classList.add(currentPage);
    }

    // Example: Form validation for login form
    var loginForm = document.querySelector('.login-form');
    if (loginForm) {
        loginForm.addEventListener('submit', function(event) {
            var username = loginForm.querySelector('input[name="username"]').value;
            var password = loginForm.querySelector('input[name="password"]').value;

            if (!username || !password) {
                event.preventDefault();
                alert('Please enter both username and password.');
            }
        });
    }

    // Example: Button click event handler
    var buttons = document.querySelectorAll('.btn');
    buttons.forEach(function(button) {
        button.addEventListener('click', function() {
            // Perform an action when the button is clicked
            console.log('Button clicked:', button.textContent);
        });
    });

    // Example: Dynamic content management
    // This could be used to load content dynamically based on user interaction
    var dynamicContentContainer = document.querySelector('.dynamic-content');
    if (dynamicContentContainer) {
        // Example: Load content when a specific button is clicked
        var loadContentButton = document.querySelector('.load-content-button');
        if (loadContentButton) {
            loadContentButton.addEventListener('click', function() {
                // Simulate an AJAX request to load content
                setTimeout(function() {
                    dynamicContentContainer.innerHTML = '<p>Content loaded dynamically.</p>';
                },  1000);
            });
        }
    }
// public/assets/scripts/scripts.js

document.addEventListener('DOMContentLoaded', function() {
    // Example: Add a class to the body element based on the current page
    // This can be used to apply specific styles to different pages
    var currentPage = document.querySelector('body').getAttribute('data-page');
    if (currentPage) {
        document.body.classList.add(currentPage);
    }

    // Example: Form validation for login form
    var loginForm = document.querySelector('.login-form');
    if (loginForm) {
        loginForm.addEventListener('submit', function(event) {
            var username = loginForm.querySelector('input[name="username"]').value;
            var password = loginForm.querySelector('input[name="password"]').value;

            if (!username || !password) {
                event.preventDefault();
                alert('Please enter both username and password.');
            }
        });
    }

    // Example: Button click event handler
    var buttons = document.querySelectorAll('.btn');
    buttons.forEach(function(button) {
        button.addEventListener('click', function() {
            // Perform an action when the button is clicked
            console.log('Button clicked:', button.textContent);
        });
    });

    // Example: Dynamic content management
    // This could be used to load content dynamically based on user interaction
    var dynamicContentContainer = document.querySelector('.dynamic-content');
    if (dynamicContentContainer) {
        // Example: Load content when a specific button is clicked
        var loadContentButton = document.querySelector('.load-content-button');
        if (loadContentButton) {
            loadContentButton.addEventListener('click', function() {
                // Simulate an AJAX request to load content
                setTimeout(function() {
                    dynamicContentContainer.innerHTML = '<p>Content loaded dynamically.</p>';
                },   1000);
            });
        }
    }

    // Example: Toggle a menu on small screens
    var menuToggle = document.querySelector('.menu-toggle');
    if (menuToggle) {
        menuToggle.addEventListener('click', function() {
            document.body.classList.toggle('menu-open');
        });
    }

    // Example: Handle form submission for a review submission form
    var reviewForm = document.querySelector('.review-form');
    if (reviewForm) {
        reviewForm.addEventListener('submit', function(event) {
            event.preventDefault();
            // Perform AJAX request to submit the review
            console.log('Review form submitted.');
        });
    }

    // Example: Handle form submission for a restaurant creation form
    var restaurantForm = document.querySelector('.restaurant-form');
    if (restaurantForm) {
        restaurantForm.addEventListener('submit', function(event) {
            event.preventDefault();
            // Perform AJAX request to create a new restaurant
            console.log('Restaurant form submitted.');
        });
    }

    // Add more scripts as needed for other pages or functionalities
});

// public/assets/scripts/scripts.js

document.addEventListener('DOMContentLoaded', function() {
    // Example: User registration form submission
    var registrationForm = document.querySelector('.registration-form');
    if (registrationForm) {
        registrationForm.addEventListener('submit', function(event) {
            event.preventDefault();
            // Perform AJAX request to register the user
            console.log('Registration form submitted.');
        });
    }

    // Example: Cuisine discovery search
    var cuisineSearchForm = document.querySelector('.cuisine-search-form');
    if (cuisineSearchForm) {
        cuisineSearchForm.addEventListener('submit', function(event) {
            event.preventDefault();
            // Perform AJAX request to search for cuisines
            console.log('Cuisine search form submitted.');
        });
    }

    // Example: Personalized recommendation feed
    var recommendationFeed = document.querySelector('.recommendation-feed');
    if (recommendationFeed) {
        // Fetch and display personalized recommendations
        console.log('Fetching personalized recommendations...');
    }

    // Example: Social media integration
    var socialMediaLinks = document.querySelectorAll('.social-media-link');
    socialMediaLinks.forEach(function(link) {
        link.addEventListener('click', function() {
            // Open social media link in a new tab
            window.open(link.href, '_blank');
        });
    });

    // Example: User review aggregator
    var reviewAggregator = document.querySelector('.review-aggregator');
    if (reviewAggregator) {
        // Fetch and display aggregated reviews
        console.log('Fetching aggregated reviews...');
    }

    // Example: Restaurant rating system
    var restaurantRatings = document.querySelectorAll('.restaurant-rating');
    restaurantRatings.forEach(function(rating) {
        rating.addEventListener('click', function() {
            // Handle restaurant rating click
            console.log('Restaurant rating clicked.');
        });
    });

    // Example: Interactive map for restaurant locations
    var restaurantMap = document.querySelector('.restaurant-map');
    if (restaurantMap) {
        // Initialize map and display restaurant locations
        console.log('Initializing restaurant map...');
    }

    // Example: Photo and experience sharing
    var photoUploadForm = document.querySelector('.photo-upload-form');
    if (photoUploadForm) {
        photoUploadForm.addEventListener('submit', function(event) {
            event.preventDefault();
            // Perform AJAX request to upload photo
            console.log('Photo upload form submitted.');
        });
    }

    // Example: Search and filter options
    var searchForm = document.querySelector('.search-form');
    if (searchForm) {
        searchForm.addEventListener('submit', function(event) {
            event.preventDefault();
            // Perform AJAX request to search and filter results
            console.log('Search form submitted.');
        });
    }

    // Example: Real-time notifications
    // This would typically be handled by a WebSocket connection or similar
    // technology, which is beyond the scope of this example.

    // Example: Dietary preferences settings
    var dietaryPreferencesForm = document.querySelector('.dietary-preferences-form');
    if (dietaryPreferencesForm) {
        dietaryPreferencesForm.addEventListener('submit', function(event) {
            event.preventDefault();
            // Perform AJAX request to update dietary preferences
            console.log('Dietary preferences form submitted.');
        });
    }

    // Example: Restaurant booking feature
    var bookingForm = document.querySelector('.booking-form');
    if (bookingForm) {
        bookingForm.addEventListener('submit', function(event) {
            event.preventDefault();
            // Perform AJAX request to book a restaurant
            console.log('Booking form submitted.');
        });
    }

    // Example: Community engagement forums
    // This would involve creating a forum system with threads, comments, etc.
    // which is a complex feature and beyond the scope of this example.

    // Example: Ad preference customisation
    var adPreferenceForm = document.querySelector('.ad-preference-form');
    if (adPreferenceForm) {
        adPreferenceForm.addEventListener('submit', function(event) {
            event.preventDefault();
            // Perform AJAX request to update ad preferences
            console.log('Ad preference form submitted.');
        });
    }

    // Example: Multi-language support
    // This would involve using internationalization libraries and creating
    // a language switcher feature.

    // Add more scripts as needed for other pages or functionalities
});

document.addEventListener('DOMContentLoaded', function() {
    // Example: Add a class to the body element based on the current page
    // This can be used to apply specific styles to different pages
    var currentPage = document.querySelector('body').getAttribute('data-page');
    if (currentPage) {
        document.body.classList.add(currentPage);
    }

    // Example: Form validation for login form
    var loginForm = document.querySelector('.login-form');
    if (loginForm) {
        loginForm.addEventListener('submit', function(event) {
            var username = loginForm.querySelector('input[name="username"]').value;
            var password = loginForm.querySelector('input[name="password"]').value;

            if (!username || !password) {
                event.preventDefault();
                alert('Please enter both username and password.');
            }
        });
    }

    // Example: Button click event handler
    var buttons = document.querySelectorAll('.btn');
    buttons.forEach(function(button) {
        button.addEventListener('click', function() {
            // Perform an action when the button is clicked
            console.log('Button clicked:', button.textContent);
        });
    });

    // Example: Dynamic content management
    // This could be used to load content dynamically based on user interaction
    var dynamicContentContainer = document.querySelector('.dynamic-content');
    if (dynamicContentContainer) {
        // Example: Load content when a specific button is clicked
        var loadContentButton = document.querySelector('.load-content-button');
        if (loadContentButton) {
            loadContentButton.addEventListener('click', function() {
                // Simulate an AJAX request to load content
                setTimeout(function() {
                    dynamicContentContainer.innerHTML = '<p>Content loaded dynamically.</p>';
                },   1000);
            });
        }
    }

    // Example: Toggle a menu on small screens
    var menuToggle = document.querySelector('.menu-toggle');
    if (menuToggle) {
        menuToggle.addEventListener('click', function() {
            document.body.classList.toggle('menu-open');
        });
    }

    // Example: Handle form submission for a review submission form
    var reviewForm = document.querySelector('.review-form');
    if (reviewForm) {
        reviewForm.addEventListener('submit', function(event) {
            event.preventDefault();
            // Perform AJAX request to submit the review
            console.log('Review form submitted.');
        });
    }

    // Example: Handle form submission for a restaurant creation form
    var restaurantForm = document.querySelector('.restaurant-form');
    if (restaurantForm) {
        restaurantForm.addEventListener('submit', function(event) {
            event.preventDefault();
            // Perform AJAX request to create a new restaurant
            console.log('Restaurant form submitted.');
        });
    }

    // Example: Handle form submission for a forgot password form
    var forgotPasswordForm = document.querySelector('.forgot-password-form');
    if (forgotPasswordForm) {
        forgotPasswordForm.addEventListener('submit', function(event) {
            event.preventDefault();
            // Perform AJAX request to send a password reset email
            console.log('Forgot password form submitted.');
        });
    }

    // Example: Handle logout functionality
    var logoutButton = document.querySelector('.logout-button');
    if (logoutButton) {
        logoutButton.addEventListener('click', function() {
            // Perform AJAX request to log out the user
            console.log('Logout button clicked.');
        });
    }

    // Add more scripts as needed for other pages or functionalities
});

    // Add more scripts as needed for other pages or functionalities
});
// public/assets/scripts/scripts.js

function fetchTwitterTrends(woeid) {
    // Replace 'YOUR_CONSUMER_KEY', 'YOUR_CONSUMER_SECRET', 'YOUR_ACCESS_TOKEN', and 'YOUR_ACCESS_TOKEN_SECRET' with your actual keys and tokens
    var consumerKey = 'YOUR_CONSUMER_KEY';
    var consumerSecret = 'YOUR_CONSUMER_SECRET';
    var accessToken = 'YOUR_ACCESS_TOKEN';
    var accessTokenSecret = 'YOUR_ACCESS_TOKEN_SECRET';

    // Create a new OAuth object with your keys and tokens
    var OAuth = require('oauth-1.0a');
    var oauth = OAuth({
        consumer: {
            key: consumerKey,
            secret: consumerSecret
        },
        signature_method: 'HMAC-SHA1',
        hash_function(base_string, key) {
            return crypto
                .createHmac('sha1', key)
                .update(base_string)
                .digest('base64')
        },
    });

    // Generate the OAuth headers
    var request_data = {
        url: 'https://api.twitter.com/1.1/trends/place.json?id=' + woeid,
        method: 'GET',
    };

    var token = {
        key: accessToken,
        secret: accessTokenSecret,
    };

    var oauth_headers = oauth.toHeader(oauth.authorize(request_data, token));

    // Make the request to the Twitter API
    fetch('https://api.twitter.com/1.1/trends/place.json?id=' + woeid, {
        method: 'GET',
        headers: {
            'Authorization': oauth_headers.Authorization,
            'Content-Type': 'application/json'
        }
    })
    .then(response => response.json())
    .then(data => {
        // Process the data and update the DOM
        displayTrendingTopics(data[0].trends);
    })
    .catch(error => {
        console.error('Error:', error);
    });
}

function displayTrendingTopics(trends) {
    var trendingTopicsContainer = document.querySelector('.trending-topics-container');
    trends.forEach(function(trend) {
        var trendElement = document.createElement('div');
        trendElement.textContent = trend.name;
        trendingTopicsContainer.appendChild(trendElement);
    });
}
// public/assets/scripts/scripts.js

function initMap() {
    // Create a new map centered on a specific location
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom:  12,
        center: {lat:  40.7128, lng: -74.0060} // Example coordinates for New York City
    });

    // Example array of restaurant data with latitude and longitude
    var restaurants = [
        {name: 'Restaurant  1', lat:  40.7128, lng: -74.0060},
        {name: 'Restaurant  2', lat:  40.7306, lng: -73.9352},
        // Add more restaurant data as needed
    ];

    // Add markers for each restaurant
    restaurants.forEach(function(restaurant) {
        var marker = new google.maps.Marker({
            position: {lat: restaurant.lat, lng: restaurant.lng},
            map: map,
            title: restaurant.name
        });
    });

    // Add an info window to display restaurant details when a marker is clicked
    var infoWindow = new google.maps.InfoWindow();
    markers.forEach(function(marker) {
        marker.addListener('click', function() {
            infoWindow.setContent('<div><h2>' + marker.title + '</h2></div>');
            infoWindow.open(map, marker);
        });
    });
}

// Call the initMap function when the page loads
window.onload = initMap;
