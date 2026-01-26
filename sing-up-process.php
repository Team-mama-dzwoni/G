<?php

require_once __DIR__ . "/functions.php";
session_start();

$_SESSION["email_error"] = "";
$_SESSION["username_error"] = "";

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


//VALIDATION
function validateUsername($username, $conn): void
{
    if (mb_strlen($username) < 3 || mb_strlen($username) > 30)
        redirect("sign-up.php");

    $stmt = $conn->prepare("SELECT 1 FROM users WHERE username = :username");
    $stmt->execute([":username" => $username]);

    if ($stmt->fetch()) {
        $_SESSION["username_error"] = "Username is already taken";
        redirect("sign-up.php");
    }
}

function validateEmail($email, $conn): void
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        redirect("sign-up.php");

    $stmt = $conn->prepare("SELECT 1 FROM users WHERE email = :email");
    $stmt->execute([":email" => $email]);

    if ($stmt->fetch()) {
        $_SESSION["email_error"] = "Email is already registered";
        redirect("sign-up.php");
    }

}

function validatePassword($password): void
{
    $pattern = '/^(?=.*[\d\W])[!-~]{6,64}$/';
    if (!preg_match($pattern, $password))
        redirect("sign-up.php");
}


//MAIN
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $email = trim(strtolower($_POST["email"]));
    $password = $_POST["password"];

    validateUsername($username, $conn);
    validateEmail($email, $conn);
    validatePassword($password);

    //birthdate
    $month = trim($_POST["month"]);
    $day = trim($_POST["day"]);
    $year = trim($_POST["year"]);

    $birthdate = null;

    try {
        $birthdate = new DateTimeImmutable($year . "-" . $month . "-" . $day);
    } catch (Exception $e) {
        redirect("sign-up.php");
    }

    try {
        $user = User::register($conn, $username, $email, $password, $birthdate);
    } catch (Exception $e) {
        redirect("sign-up.php");
    }


    redirect("index.php");
}
