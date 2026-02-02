<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="add_post.php" method="post">

    <label for="content">
        <h1>Content</h1>
        <input type="text" id="content" name="content" placeholder="Write here">
    </label>

    <h3>Files</h3>
    <input type="file" id="file" name="file" hidden>
    <button type="button" onclick="document.getElementById('file').click()">
        Select file
    </button>

    <label for="link">
        <h3>Links</h3>
        <input type="url" id="link" name="link">
    </label>

    <br>

    <input type="submit" value="Postt">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $content = $_POST["content"];
    $link = $_POST["link"];
    $file = $_POST["file"];
    $date_of_creation = date("Y-m-d-H-i-s");

    $host = 'localhost';
    $db = 'g_database';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try {
        $pdo = new PDO($dsn, $user, $pass, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);

        echo $content;
        echo $link;
        echo $file;
        echo $date_of_creation;

        $sql = "
INSERT INTO posts (content, file_path, date_of_creation, user_id)
VALUES (:content, :file_path, :date_of_creation, :user_id)
";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':content' => $content,
            ':file_path' => $file,
            ':date_of_creation' => $date_of_creation,
            ':user_id' => 5
        ]);


    } catch (PDOException $e) {
        die("Błąd połączenia: " . $e->getMessage());
    }

}
?>


</body>
</html>