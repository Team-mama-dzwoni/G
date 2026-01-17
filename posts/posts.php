<?php
//Database connection
try {
    $pdo = new PDO('mysql:host=localhost;dbname=g_database', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());

}
//Database data
//$q = $pdo->prepare("Select posts.*, post_author.nickname AS post_author, comments.id AS comment_id, comments.content AS comment_content, comment_author.nickname AS comment_author From posts join users AS post_author ON posts.user_id = post_author.id LEFT JOIN comments ON posts.id = comments.post_id LEFT JOIN users AS comment_author ON comments.user_id = comment_author.id ORDER BY posts.date_of_creation asc;");
$q = $pdo->prepare("select posts.*, users.nickname, users.profile_pic from posts join users on posts.user_id = users.id;");
$q->execute();
$posts = $q->fetchAll(PDO::FETCH_ASSOC);
$data = [];
foreach ($posts as $post) {
    $data[] = $post;
}
echo json_encode($data);
$pdo = null;

