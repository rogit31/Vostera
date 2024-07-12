<?php
namespace App\Controllers;
use App\Config\Database;
use App\Models\ArticleModel;
use PDO;
use PDOException;


class ArticleController
{
    private $articleModel;

    public function __construct(){
        $db = new Database();
        $conn = $db->connect();
        $this->articleModel = new ArticleModel($conn);
    }
    public function getRecentArticles($limit){
        $articles = $this->articleModel->getRecentArticles($limit);
        require_once __DIR__ . '/../Views/components/excerpts.php';
    }

}
