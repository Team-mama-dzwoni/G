<?php

require_once __DIR__ . "/functions.php";
session_start();


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign in to G</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <div class="form">
        <div class="logo">
            <a href="sign-in.php"><svg width="3rem" height="3rem" viewBox="0 0 45 53" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.7 52.99C12.18 52.99 9.79998 52.4067 7.55998 51.24C5.31998 50.0733 3.49998 48.44 2.09998 46.34C0.699976 44.1933 -2.3976e-05 41.65 -2.3976e-05 38.71C-2.3976e-05 36.2367 0.606643 33.6 1.81998 30.8C3.07998 27.9533 4.68998 25.0833 6.64998 22.19C8.65664 19.25 10.8266 16.4733 13.16 13.86C15.4933 11.2 17.78 8.84333 20.02 6.79C22.26 4.69 24.2433 3.03333 25.97 1.82C27.6966 0.606669 28.91 2.86102e-06 29.61 2.86102e-06C30.4966 2.86102e-06 31.2666 0.256669 31.92 0.770001C32.62 1.23667 32.9933 1.96 33.04 2.94C33.04 3.40667 32.8766 3.94334 32.55 4.55C32.2233 5.11 31.5933 5.69333 30.66 6.3C29.6333 6.95333 28.3266 7.93333 26.74 9.24C25.1533 10.5467 23.45 12.11 21.63 13.93C19.81 15.7033 18.0133 17.64 16.24 19.74C14.4666 21.7933 12.8333 23.9167 11.34 26.11C9.84664 28.2567 8.65664 30.3567 7.76998 32.41C6.88331 34.4633 6.43998 36.3767 6.43998 38.15C6.43998 40.9033 7.20998 43.0033 8.74998 44.45C10.29 45.8967 12.4133 46.62 15.12 46.62C16.52 46.62 18.1766 46.2233 20.09 45.43C22.0033 44.6367 23.9633 43.5867 25.97 42.28C28.0233 40.9733 29.9833 39.55 31.85 38.01C33.7166 36.4233 35.3033 34.86 36.61 33.32C37.9633 31.78 38.85 30.38 39.27 29.12C38.1033 29.4 36.6333 29.7033 34.86 30.03C33.0866 30.3567 31.2433 30.66 29.33 30.94C27.4633 31.22 25.76 31.4533 24.22 31.64C22.68 31.8267 21.56 31.92 20.86 31.92C19.4133 31.92 18.27 31.5467 17.43 30.8C16.6366 30.0533 16.24 29.3067 16.24 28.56C16.24 28.0467 16.45 27.5567 16.87 27.09C17.29 26.6233 17.9433 26.32 18.83 26.18C19.8566 26.04 21.21 25.83 22.89 25.55C24.6166 25.2233 26.4133 24.92 28.28 24.64C30.1933 24.3133 31.9433 24.0333 33.53 23.8C35.1633 23.5667 36.4 23.45 37.24 23.45C39.6666 23.45 41.4633 24.1733 42.63 25.62C43.7966 27.02 44.38 29.0267 44.38 31.64C44.38 32.9 43.75 34.44 42.49 36.26C41.23 38.08 39.5266 39.97 37.38 41.93C35.28 43.8433 32.9233 45.64 30.31 47.32C27.7433 49 25.1066 50.3767 22.4 51.45C19.6933 52.4767 17.1266 52.99 14.7 52.99Z" fill="white"/></svg></a>
            <h1>Sign in to G</h1>
        </div>

        <form action="sign-in-process.php" method="post">
            <label for="username" class="form-group">
                Username or email address
                <input type="text" id="username" name="username" autocomplete="off" required>
            </label>

            <label for="password" class="form-group">
                <span class="passwordTitle">Password<a class="ml-auto" href="#">Forgot password?</a></span>
                <input type="password" id="password" name="password" autocomplete="off" required>
            </label>

            <input type="submit" class="submit" id="submit" value="Sign in">
        </form>

        <div class="spacing">
            <hr> or <hr>
        </div>

        <button class="google-btn">
            <svg class="google_icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1rem" height="1rem"><g clip-path="url(#clip0_643_9687)">
                    <path d="M8.00018 3.16667C9.18018 3.16667 10.2368 3.57333 11.0702 4.36667L13.3535 2.08333C11.9668 0.793333 10.1568 0 8.00018 0C4.87352 0 2.17018 1.79333 0.853516 4.40667L3.51352 6.47C4.14352 4.57333 5.91352 3.16667 8.00018 3.16667Z" fill="#EA4335"></path>
                    <path d="M15.66 8.18335C15.66 7.66002 15.61 7.15335 15.5333 6.66669H8V9.67335H12.3133C12.12 10.66 11.56 11.5 10.72 12.0667L13.2967 14.0667C14.8 12.6734 15.66 10.6134 15.66 8.18335Z" fill="#4285F4"></path>
                    <path d="M3.51 9.53001C3.35 9.04668 3.25667 8.53334 3.25667 8.00001C3.25667 7.46668 3.34667 6.95334 3.51 6.47001L0.85 4.40668C0.306667 5.48668 0 6.70668 0 8.00001C0 9.29334 0.306667 10.5133 0.853333 11.5933L3.51 9.53001Z" fill="#FBBC05"></path>
                    <path d="M8.0001 16C10.1601 16 11.9768 15.29 13.2968 14.0633L10.7201 12.0633C10.0034 12.5467 9.0801 12.83 8.0001 12.83C5.91343 12.83 4.14343 11.4233 3.5101 9.52667L0.850098 11.59C2.1701 14.2067 4.87343 16 8.0001 16Z" fill="#34A853"></path>
                </g>
                <defs>
                    <clipPath id="clip0_643_9687">
                        <rect width="16" height="16" fill="white"></rect>
                    </clipPath>
                </defs></svg>
            <span class="google_text">Continue with Google</span>
        </button>

        <p class="redirect">Don’t have an account? <a href="sign-up.php">Create an account</a></p>
    </div>
</div>

<script src="birthdateRender.js"></script>

</body>
</html>