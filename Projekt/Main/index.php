<?php
?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>G</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="animations.css">
</head>
<body>

<div class="off-screen-menu">
    <ul>
        <li>Home</li>
        <li>About</li>
        <li>Contact</li>
    </ul>
</div>

<header>

    <div class="top bar">
        <div class="menu_holder">
            <div class="burger_menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div id="logo">
            <p>G</p>
        </div>
        <div class="icons">
            <div id="search" class="header icon">
                <label>
                    <input type="text" class="search-bar" placeholder="Search...">
                </label>
                <svg class="search-glass" width="2.5rem" height="2.5rem" viewBox="-2.4 -2.4 28.80 28.80" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(0)"><g id="SVGRepo_bgCarrier" stroke-width="0" transform="translate(0,0), scale(1)"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15.7955 15.8111L21 21M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z" stroke="var(--accent)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
            </div>
            <div id="add_post" class="header icon">
                <svg width="2.5rem" height="2.5rem" viewBox="-2.4 -2.4 28.80 28.80" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(0)"><g id="SVGRepo_bgCarrier" stroke-width="0" transform="translate(0,0), scale(1)"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15.7955 15.8111L21 21M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z" stroke="var(--accent)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
            </div>
            <div id="profile" class="header icon">
                <svg width="2.5rem" height="2.5rem" viewBox="-2.4 -2.4 28.80 28.80" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(0)"><g id="SVGRepo_bgCarrier" stroke-width="0" transform="translate(0,0), scale(1)"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15.7955 15.8111L21 21M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z" stroke="var(--accent)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
            </div>
        </div>
    </div>

        <!--space-->

    <div class="bottom bar">
        <div class="current_post following">
            following
        </div>
        <div class="current_post fyp">
            fyp
        </div>
    </div>
</header>

<!--POSTS-->

<section id="posts_holder">
    <section id="posts">
        <div class="post">
            <h1>Project G</h1>
            <h2>Lorem ipsum dolor sit amet, consectetur radicalising elit. Labor, voluptuary niggeros!</h2>
            <p>(Placeholder)</p>
        </div>
        <div class="post">
            <!--Tu będą post-->
        </div>
    </section>
</section>


<script src="functionality.js"></script>
</body>
</html>