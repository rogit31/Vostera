<?php
namespace App\Models;

use App\Config\Database;
use App\Helpers\Helpers;
use PDO;
use PDOException;

class ArticleModel
{

    public function getAllArticles(): false|array
    {
        $db = new Database();
        $conn = $db->connect();
        if (!isset($_SESSION['loggedin'])) {
            $sql = "SELECT title, description, slug FROM articles WHERE (articles.SECRET = 'N') ORDER BY title";
        } else {
            $sql = "SELECT title, description, slug FROM articles ORDER BY title";
        }
        $stmt = $conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getAllPublishedArticlesOrderedByTitle(): false|array
    {
        $db = new Database();
        $conn = $db->connect();

        $user_id = isset($_SESSION['loggedin']) ? $_SESSION['user_id'] : null;

        $sql = "SELECT * FROM articles WHERE secret = 'N' AND isDraft = 0";

        if ($user_id) {
            $sql .= " OR author_id = ?";
        }

        $sql .= " ORDER BY title";

        $stmt = $conn->prepare($sql);
        try {
            if ($user_id) {
                $stmt->execute([$user_id]);
            } else {
                $stmt->execute();
            }
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }


    public function getAllArticlesAndContent(): false|array
    {
        $db = new Database();
        $conn = $db->connect();
        if (!isset($_SESSION['loggedin'])) {
            $sql = "SELECT title, description, content, slug FROM articles WHERE (articles.SECRET = 'N') ORDER BY title";
        } else {
            $sql = "SELECT title, description, content, slug FROM articles ORDER BY title";
        }
        $stmt = $conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getArticleBySlug($slug)
    {
        $db = new Database();
        $conn = $db->connect();

        $sql = "SELECT * FROM articles WHERE slug = ?";
        $stmt = $conn->prepare($sql);
        try {
            $stmt->execute([$slug]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            return false;
        }
    }

    public function searchArticles($input, $loggedIn)
    {
        $db = new Database();
        $conn = $db->connect();
        $inputParam = '%' . $input . '%';
        if ($loggedIn) {
            $query = "SELECT title, slug FROM articles WHERE title LIKE ? ORDER BY title";
        } else {
            $query = "SELECT title, slug FROM articles WHERE title LIKE ? AND secret = 'N' ORDER BY title";
        }
        $stmt = $conn->prepare($query);

        try {
            $stmt->execute([$inputParam]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $e->getMessage();
            return [];
        }
    }

    public function getRecentArticles($limit): false|array
    {
        $db = new Database();
        $conn = $db->connect();
        $query = "SELECT title, slug, content FROM articles WHERE isDraft=0 AND SECRET = 'N' ORDER BY last_updated DESC LIMIT :limit";
        $stmt = $conn->prepare($query);
        try {
            $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function getArticlesOrderedByLastUpdated(): false|array
    {
        $db = new Database();
        $conn = $db->connect();
        if ($_SESSION['loggedin']) {
            $query = "SELECT title, slug FROM articles ORDER BY last_updated DESC";
        } else {
            $query = "SELECT title, slug FROM articles WHERE secret='N' ORDER BY last_updated DESC";
        }

        $stmt = $conn->prepare($query);
        try {
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function getArticlesByCategory($category): false|array
    {
        $db = new Database();
        $conn = $db->connect();
        if ($_SESSION['loggedin']) {
            $query = "SELECT title, slug, description FROM articles WHERE category = ?";
        } else {
            $query = "SELECT title, slug, description FROM articles WHERE category = ? AND secret = 'N'";
        }

        $stmt = $conn->prepare($query);
        try {
            $stmt->execute([$category]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function getYourArticles(): false|array
    {
        $db = new Database();
        $conn = $db->connect();
        $user_id = $_SESSION['user_id'];
        $query = "SELECT title, slug, description, author_id FROM articles WHERE author_id = ? ORDER BY title";
        $stmt = $conn->prepare($query);
        try{
            $stmt->execute([$user_id]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }
    public function getYourDrafts(): false|array
    {
        $db = new Database();
        $conn = $db->connect();
        $user_id = $_SESSION['user_id'];
        $query = "SELECT title, slug, description, isDraft, author_id FROM articles WHERE author_id = ? AND isDraft = ? ORDER BY title";
        $stmt = $conn->prepare($query);
        try{
            $stmt->execute([$user_id, 1]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }
    public function getYourSecrets(): false|array
    {
        $db = new Database();
        $conn = $db->connect();
        $user_id = $_SESSION['user_id'];
        $query = "SELECT title, slug, description, author_id FROM articles WHERE author_id = ? AND secret=? ORDER BY title";
        $stmt = $conn->prepare($query);
        try{
            $stmt->execute([$user_id, 'Y']);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

    public function saveArticle()
    {
        $db = new Database();
        $conn = $db->connect();
        $author_id = $_SESSION['user_id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $category = $_POST['category'];
        $secret = $_POST['secret'];
        $content = $_POST['content'];
        $secret_content = $_POST['secret_content'];

        if (empty($title) || empty($description) || empty($content)) {
            header("Location: create-article");
            echo 'Fields cannot be empty';
            return false;
        }

        if (preg_match("/<script[\s\S]*?>[\s\S]*?<\/script>/i", $content) || preg_match(
                "/<script[\s\S]*?>[\s\S]*?<\/script>/i",
                $secret_content
            )) {
            header("Location: create-article");
            echo 'Content cannot contain script tags';
            return false;
        }
        $query = 'INSERT INTO articles (author_id, title, description, category, secret, content, secret_content) VALUES (?, ?, ?, ?, ?, ?, ?)';
        $stmt = $conn->prepare($query);
        try {
            $stmt->execute([$author_id, $title, $description, $category, $secret, $content, $secret_content]);
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }

        // Retrieve article ID and title to generate slug
        $article_id = $conn->lastInsertId(); // Get the last inserted article ID
        $helpers = new Helpers();
        $slug = $helpers->generateSlugById($title, $article_id);
        $query = 'UPDATE articles SET slug = ? WHERE article_id = ?';
        $stmt = $conn->prepare($query);
        try{
            $stmt->execute([$slug, $article_id]);
            header("Location: read-article/$slug");
        }
        catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }
    public function saveDraft(){
        $db = new Database();
        $conn = $db->connect();
        $author_id = $_SESSION['user_id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $category = $_POST['category'];
        $secret = $_POST['secret'];
        $content = $_POST['content'];
        $secret_content = $_POST['secret_content'];

        if (empty($title) || empty($description) || empty($content)) {
            header("Location: create-article");
            echo 'Fields cannot be empty';
            return false;
        }

        if (preg_match("/<script[\s\S]*?>[\s\S]*?<\/script>/i", $content) || preg_match(
                "/<script[\s\S]*?>[\s\S]*?<\/script>/i",
                $secret_content
            )) {
            header("Location: create-article");
            echo 'Content cannot contain script tags';
            return false;
        }

        $query = 'INSERT INTO articles (author_id, title, description, category, secret, content, secret_content, isDraft) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
        $stmt = $conn->prepare($query);
        try {
            $stmt->execute([$author_id, $title, $description, $category, $secret, $content, $secret_content, 1]);
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }

        // Retrieve article ID and title to generate slug
        $article_id = $conn->lastInsertId(); // Get the last inserted article ID
        $helpers = new Helpers();
        $slug = $helpers->generateSlugById($title, $article_id);
        $query = 'UPDATE articles SET slug = ? WHERE article_id = ?';
        $stmt = $conn->prepare($query);
        try{
            $stmt->execute([$slug, $article_id]);
            header("Location: read-article/$slug");
        }
        catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

public function saveUpdatedArticle(){
        $db = new Database();
        $conn = $db->connect();
        $title = $_POST['title'];
        $description = $_POST['description'];
        $category = $_POST['category'];
        $secret = $_POST['secret'];
        $content = $_POST['content'];
        $secret_content = $_POST['secret_content'];
        $isDraft = isset($_POST['is_draft']) ? 1 : 0;
        $articleId = $_POST['article_id'];
        $slug = $_POST['slug'];

    if (empty($title) || empty($description) || empty($content)) {
        header("Location: /edit-article/$slug");
        echo 'Fields cannot be empty';
        return false;
    }

    if (preg_match("/<script[\s\S]*?>[\s\S]*?<\/script>/i", $content) || preg_match(
            "/<script[\s\S]*?>[\s\S]*?<\/script>/i",
            $secret_content
        )) {
        header("Location: /edit-article/$slug");
        echo 'Content cannot contain script tags';
        return false;
    }

    $query = "UPDATE articles SET title =?, description =?, category =?, secret =?, content =?, secret_content =?, isDraft =? WHERE article_id = ? ";
    $stmt = $conn->prepare($query);

    try{
         $stmt->execute([$title, $description, $category, $secret, $content, $secret_content, $isDraft, $articleId]);
        header("Location: /read-article/$slug");
    }
    catch (PDOException $e){
        echo 'Something went wrong:' . $e->getMessage();
        return false;
    }
}
    public function deleteArticle($slug){

        $db = new Database();
        $conn = $db->connect();
        $query = "DELETE FROM articles WHERE slug = ?";
        $stmt = $conn->prepare($query);

        try{
            $stmt->execute([$slug]);
            echo 'Article deleted.';
            header("Location: /your-articles");
        }
        catch (PDOException $e){
            echo 'Something went wrong: ' . $e->getMessage();
        }
    }

}