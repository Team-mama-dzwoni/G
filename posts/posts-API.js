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
                    if (comment.parent_id == null) {
                        postsHTML.innerHTML += `
                        <div class="comment">
                            <h3>${comment.nickname}</h3>
                            <p>${comment.content}</p>
                        </div>`
                        postsHTML.innerHTML += `<div id="Comment-replies">`;
                        // Replies for comments
                        comments.forEach(reply => {
                            if (reply.parent_id === comment.id) {
                                postsHTML.innerHTML += `
                                    <div class="comment-reply">
                                        <h3 style="color:red">${reply.nickname}</h3>
                                        <p>${reply.content}</p>
                                    </div>`

                            }
                        })
                    }
                    postsHTML.innerHTML += `</div>`
                }
            })
            postsHTML.innerHTML += `</div>`
        })

    })
    .catch(error => console.error("Error:", error));