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
                <svg class="search-glass" width="2.5rem" height="2.5rem" viewBox="-2.4 -2.4 28.80 28.80" fill="none"
                     xmlns="http://www.w3.org/2000/svg" transform="rotate(0)">
                    <g id="SVGRepo_bgCarrier" stroke-width="0" transform="translate(0,0), scale(1)"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M15.7955 15.8111L21 21M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z"
                              stroke="var(--accent)" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                    </g>
                </svg>
            </div>
            <div id="add_post" class="header icon">
                <svg width="2.5rem" height="2.5rem" viewBox="-2.4 -2.4 28.80 28.80" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M9.00195 17H5.60636C4.34793 17 3.71872 17 3.58633 16.9023C3.4376 16.7925 3.40126 16.7277 3.38515 16.5436C3.37082 16.3797 3.75646 15.7486 4.52776 14.4866C5.32411 13.1835 6.00031 11.2862 6.00031 8.6C6.00031 7.11479 6.63245 5.69041 7.75766 4.6402C8.88288 3.59 10.409 3 12.0003 3C13.5916 3 15.1177 3.59 16.2429 4.6402C17.3682 5.69041 18.0003 7.11479 18.0003 8.6C18.0003 11.2862 18.6765 13.1835 19.4729 14.4866C20.2441 15.7486 20.6298 16.3797 20.6155 16.5436C20.5994 16.7277 20.563 16.7925 20.4143 16.9023C20.2819 17 19.6527 17 18.3943 17H15.0003M9.00195 17L9.00031 18C9.00031 19.6569 10.3435 21 12.0003 21C13.6572 21 15.0003 19.6569 15.0003 18V17M9.00195 17H15.0003"
                              stroke="var(--accent)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                </svg>
            </div>
            <div id="profile" class="header icon">
                <svg width="2.5rem" height="2.5rem" viewBox="-2.4 -2.4 28.80 28.80" fill="none"
                     xmlns="http://www.w3.org/2000/svg"
                     transform="rotate(0)">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC"
                       stroke-width="2"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z"
                              stroke="var(--accent)" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="var(--accent)"
                              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                </svg>
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
        <script src="../posts/posts-API.js"></script>
    </section>
</section>

<!--    DO ZROBIENIA:
    - naprawic burger menu
    - zrobic aby dzialala animacja searchbara
    - znalezc gdzie jest blad z poziomym scrollbarem na dole
    - zmiana logo
    - wysuwanie notifications i profil (podobnie do menu ale od gory do dolu)
 -->

<script src="functionality.js"></script>
</body>
</html>