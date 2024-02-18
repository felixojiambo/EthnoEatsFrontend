// scripts.js

function fetchForumPosts() {
    fetch('/api/forum-posts')
        .then(response => response.json())
        .then(posts => {
            const container = document.querySelector('.forums-container');
            posts.forEach(post => {
                const postElement = document.createElement('div');
                postElement.className = 'forum-post';
                postElement.innerHTML = `
                    <h3>${post.title}</h3>
                    <p>${post.content}</p>
                    <span>Posted by ${post.author} on ${post.date}</span>
                `;
                container.appendChild(postElement);
            });
        })
        .catch(error => console.error('Error fetching forum posts:', error));
}

// Call the function to fetch and display the forum posts when the page loads
fetchForumPosts();
