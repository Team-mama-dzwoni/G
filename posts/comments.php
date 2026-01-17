<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=g_database', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());

}
$q = $pdo->prepare("select comments.*, users.nickname, users.profile_pic from comments join users on comments.user_id = users.id;");
$q->execute();
$comments = $q->fetchAll(PDO::FETCH_ASSOC);
$data = [];
foreach ($comments as $comment) {
    $data[] = $comment;
}
echo json_encode($data);
$pdo = null;


