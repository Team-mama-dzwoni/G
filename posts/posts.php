<?php
//Database connection
try {
    $pdo = new PDO('mysql:host=localhost;dbname=g_database', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());

}
//Database data
$q = $pdo->prepare("select posts.*, users.nickname, users.profile_pic from posts join users on posts.user_id = users.id;");
$q->execute();
$posts = $q->fetchAll(PDO::FETCH_ASSOC);
$data = [];
foreach ($posts as $post) {
    $data[] = $post;
}
echo json_encode($data);
$pdo = null;

