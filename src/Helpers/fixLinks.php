<?php
require_once __DIR__ . "/../../vendor/autoload.php";
use App\Config\Database;
use App\Models\ArticleModel;

$db = new Database();
$conn = $db->connect();
$articleModel = new ArticleModel();
$articles = $articleModel->getAllArticlesAndContent();

function updateArticleLinks($articles, $conn)
{
    foreach ($articles as $article) {
        $content = $article['content'];
        $id = $article['article_id'];
        $slug = $article['slug'];

        $dom = new DOMDocument;
        @$dom->loadHTML($content);

        $updated = false;
        foreach ($dom->getElementsByTagName('a') as $link) {
            $href = $link->getAttribute('href');
            if (preg_match('/read-article\.php\?id=(\d+)/', $href, $matches)) {
                $articleId = $matches[1];

                $slugQuery = "SELECT slug FROM articles WHERE article_id = ?";
                $stmt = $conn->prepare($slugQuery);
                $stmt->bindParam(1, $articleId, PDO::PARAM_INT);
                $stmt->execute();
                $slug = $stmt->fetchColumn();

                if ($slug) {
                    $newHref = "/read-article/$slug";
                    $link->setAttribute('href', $newHref);
                    $updated = true;
                }
            }
        }

        if ($updated) {
            $updatedContent = $dom->saveHTML();
            $updateQuery = "UPDATE articles SET content = ? WHERE article_id = ?";
            $stmt = $conn->prepare($updateQuery);
            $stmt->bindParam(1, $updatedContent, PDO::PARAM_STR);
            $stmt->bindParam(2, $id, PDO::PARAM_INT);
            $stmt->execute();
        }
    }
}

$query = "SELECT article_id, content, slug FROM articles";
$stmt = $conn->query($query);
$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($articles) {
    updateArticleLinks($articles, $conn);
} else {
    echo "No articles found.";
}
exit();


