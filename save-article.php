<?php
include("db.php");
$_POST = filter_input_array(INPUT_POST);

        $title = $_POST['title'];
        $description = $_POST['description'];
        $category = $_POST['category'];
        $secret = $_POST['secret'];
        $url = '/html/lore/' . $_POST['category'] . '/' . $_POST['title'];
        $content = $_POST['content'];
        $secret_content = $_POST['secret_content'];

if (empty($title) || empty($description)) {
    $_SESSION['warning'] = 'Title and description cannot be empty!';
    header('Location: create-article.php');
    exit();
}
    $sql = "INSERT INTO articles (title, description, category, secret, url, content, secret_content) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);

try {
    $stmt->execute([$title, $description, $category, $secret, $url, $content, $secret_content]);
} catch (\PDOException $e) {
    echo 'Error:' . $e->getMessage();
}

$id = $pdo->lastInsertId();

header('Location: read-article.php?id=' . $id);
exit();