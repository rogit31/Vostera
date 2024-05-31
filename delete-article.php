<?php
include('db.php');
$id = (int)$_GET['id'];
if(!$_SESSION['loggedin']){
    header('Location: index.php');
}

$sql = "DELETE FROM articles WHERE article_id = ?";
$stmt = $pdo->prepare($sql);

try {
    $stmt->execute([$id]);
} catch (\PDOException $e) {
    echo 'Error:' . $e->getMessage();
}
header('Location: index.php');
exit();