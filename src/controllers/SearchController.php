<?php
namespace App\Controllers;
use App\Config\Database;
use App\Models\ArticleModel;
use PDO;
use PDOException;

class SearchController {
    public function livesearch(){
        $articleModel = new ArticleModel();

        if (isset($_POST['input'])) {
            $input = $_POST['input'];
            $loggedIn = isset($_SESSION['loggedin']);
            $results = $articleModel->searchArticles($input, $loggedIn);

            if ($results) {
                foreach ($results as $row) {
                    $title = $row["title"];
                    $url = '/read-article/' . $row["slug"];
                    echo '<a class="result" href="' . $url . '">' . $title . '</a>';
                }
            } else {
                echo "<p class='result warning'>No articles found</p>";
            }
        }

    }
    public function articleLivesearch(){
        $articleModel = new ArticleModel();
        if (isset($_POST['input'])) {
            $input = $_POST['input'];
            $loggedIn = isset($_SESSION['loggedin']);
            $results = $articleModel->searchArticles($input, $loggedIn);

            if ($results) {
                $topResults = array_slice($results, 0, 5);
                foreach ($topResults as $row) {
                    $title = $row["title"];
                    $url = '/read-article/' . $row["slug"];
                    echo ' <a class="inlineSearchResult" href=" '. $url .  '"> ' . $title . '</a>';
                }
            } else {
                echo "<p class='result warning'>No articles found</p>";
            }
        }

    }
}