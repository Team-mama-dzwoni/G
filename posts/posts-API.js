// Shows posts
fetch('../posts/posts.php')
    .then(response => {
            return response.json();
        }
    )
    .then(data => {
        const postsHTML = document.querySelector("#posts")
        data.forEach(post => {
            postsHTML.innerHTML += `
            <div class="post">
                <h1>${post.nickname}</h1>
                <h2>${post.content}</h2>
                <p>(Placeholder)</p>
            </div>`

        })
    })

    .catch(error => console.error("Error:", error));