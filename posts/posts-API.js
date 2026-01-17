// Fetches json data of posts and comments
Promise.all([
    fetch('../posts/posts.php').then(response => response.json()),
    fetch('../posts/comments.php').then(response => response.json())
])
    .then(([posts, comments]) => {
        const postsHTML = document.querySelector("#posts");
        // Creates posts
        posts.forEach(post => {
            postsHTML.innerHTML += `
            <div class="post">
                <h1>${post.nickname}</h1>
                <h2>${post.content}</h2>
                <p>(Placeholder)</p>
            </div>
            <div id="comments">`
            // Creates comments
            comments.forEach(comment => {
                if (comment.post_id === post.id) {
                    postsHTML.innerHTML += `
                    <div class="comment">
                        <h3>${comment.nickname}</h3>
                        <p>${comment.content}</p>
                    </div>`
                }
            })
        })
    })
    .catch(error => console.error("Error:", error));