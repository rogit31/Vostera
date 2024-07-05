<?php
require_once __DIR__ . '/../../vendor/autoload.php';

use App\Config\Database;

$db = new Database();
$conn = $db->connect();

function generateSlug($title){
    return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $title)));
}

$stmt = $conn->prepare("SELECT article_id, title from articles");
$stmt->execute();
$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($articles as $article) {
    $slug = generateSlug($article['title']);

    $checkSlugStmt = $conn->prepare("SELECT COUNT(*) from articles where slug = ?");
    $checkSlugStmt->execute([$slug]);
    if ($checkSlugStmt->fetchColumn() > 0) {
        $slug = $slug . "-" . $article['article_id'];
    }
    $updateStmt = $conn->prepare("UPDATE articles SET slug = ? WHERE article_id = ?");
    $updateStmt->execute([$slug, $article['article_id']]);
}