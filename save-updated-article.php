<?php
include('db.php');

$id = (int)$_GET['id'];

$_POST = filter_input_array(INPUT_POST);

$title = $_POST['title'];
$description = $_POST['description'];
$category = $_POST['category'];
$secret = $_POST['secret'];
$url = '/html/lore/' . $_POST['category'] . '/' . $_POST['title'];
$content = $_POST['content'];
$secret_content = $_POST['secret_content'];

$sql = "UPDATE articles SET title = ?, description = ?, category = ?, secret = ?, url = ?, content = ?, secret_content = ? WHERE article_id = ?";
$stmt = $pdo->prepare($sql);

try {
    $stmt->execute([$title, $description, $category, $secret, $url, $content, $secret_content, $id]);
} catch (\PDOException $e) {
    echo 'Error:' . $e->getMessage();
}

header('Location: read-article.php?id=' . $id);
exit();