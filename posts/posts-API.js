fetch('posts.php')
    .then(response => response.json())
    .then(data => {
        const body = document.querySelector('body');
        data.forEach(post => {
            body.innerHTML += `${post.nickname} ${post.profile_pic} ${post.content} ${post.image} ${post.link} ${post.video} ${post.likes} ${post.views} ${post.date_of_creation}`;

        })
    })

    .catch(error => console.error("Error:", error));