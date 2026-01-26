<?php

class User {
    private PDO $PDO;
    private string $username;
    private string $password;
    private string $email;
    private DateTimeImmutable $birthdate;

    private function __construct() {}

    public static function register(PDO $PDO, string $username, string $email, string $password, DateTimeImmutable $birthdate) : self {
        session_regenerate_id();

        $user = new self();
        $user->PDO = $PDO;

        //VALIDATION
        $user->validateUsername($username);
        $user->validateEmail($email);
        $user->validatePassword($password);


        //CONSTRUCTOR
        $user->username = $username;
        $user->email = $email;
        $user->password = password_hash($password, PASSWORD_DEFAULT);
        $user->birthdate = $birthdate;

        //ADD USER TO DATABASE
        $stmt = $user->PDO->prepare("INSERT INTO users (username, email, password, date_of_birth) VALUES (:username, :email, :password, :birthdate)");
        $stmt->execute([
            ":username" => $user->username,
            ":email" => $user->email,
            ":password" => $user->password,
            ":birthdate" => $user->birthdate->format('Y-m-d')
        ]);

        //SET SESSION
        $stmt = $user->PDO->prepare("SELECT users.id FROM users WHERE users.email = :email");
        $stmt->execute([":email" => $user->email]);

        $_SESSION["user_id"] = $stmt->fetchColumn();
        $_SESSION["isLogged"] = true;

        return $user;
    }

    public static function login(PDO $PDO, string $username, string $password) : self
    {
        session_regenerate_id();

        $user = new self();
        $user->PDO = $PDO;

        //VALIDATION
        $stmt = $user->PDO->prepare("SELECT users.id, users.password FROM users WHERE users.username = :username OR users.email = :username");
        $stmt->execute([":username" => $username]);
        $result = $stmt->fetch();

        if (!$result || !password_verify($password, $result["password"])) {
            throw new DomainException("Invalid username or password");
        }

        //CONSTRUCTOR
        $user->username = $username;

        //SET SESSION
        $_SESSION["user_id"] = $result["id"];
        $_SESSION["isLogged"] = true;

        return $user;
    }













    private function validateUsername($username): void {
        if (mb_strlen($username) < 3 || mb_strlen($username) > 30)
            throw new DomainException("Invalid username format");

        $stmt = $this->PDO->prepare("SELECT 1 FROM users WHERE username = :username");
        $stmt->execute([":username" => $username]);

        if ($stmt->fetch())
            throw new DomainException("Username is already taken");
    }

    private function validateEmail($email): void {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            throw new DomainException("Invalid email address format");

        $stmt = $this->PDO->prepare("SELECT 1 FROM users WHERE email = :email");
        $stmt->execute([":email" => $email]);

        if ($stmt->fetch())
            throw new DomainException("Email is already registered");
    }

    private function validatePassword($password) :void {
        $pattern = '/^(?=.*[\d\W])[!-~]{6,64}$/';
        if (!preg_match($pattern, $password))
            throw new DomainException("Invalid password format");
    }
}
