<?php

require_once __DIR__ . "/functions.php";
session_start();

require_once "user.php";


//CONNECT DATABASE
try {
    $conn = new PDO("mysql:host=localhost;dbname=g_database",
        "root",
        "",
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}


//MAIN
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = $_POST["password"];

    try {
        $user = User::login($conn, $username, $password);
    } catch (Exception $e) {
        redirect("sign-in.php");
    }

    redirect("index.php");
}