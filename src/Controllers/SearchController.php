<?php

namespace App\Controllers;

use App\Config\Database;
use App\Models\ArticleModel;
use PDO;
use PDOException;

class SearchController
{
    public function livesearch()
    {
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

    public function articleLivesearch()
    {
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
                    echo ' <a class="inlineSearchResult" href=" ' . $url . '"> ' . $title . '</a>';
                }
            } else {
                echo "<p class='result warning'>No articles found</p>";
            }
        }

    }

    public function articleSort()
    {
        $articleModel = new ArticleModel();
        $search = $_GET['searchbar'] ?? '';
        $category = $_GET['category'] ?? '';
        $sort = $_GET['sort'] ?? 'latest';
        $loggedIn = isset($_SESSION['loggedin']);
        $articleCount = 0;
        $results = $articleModel->sortArticles($search, $category, $sort, $loggedIn);

        if ($results) {
            foreach ($results as $row) {
                $articleCount++;
            }
            echo "<p class='resultCount'>Articles found: " . $articleCount . "</p>";
            foreach ($results as $article) {
                echo "
    <div class='resultCard'>
        <a href=\"/read-article/" . $article['slug'] . "\">" . $article['title'] . "</a>";
                if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == $article['author_id']) {
                    echo "
        <span>
            <form action='/edit-article/" . $article['slug'] . "' method='post'>
                <button type='submit'><img class='articleCardIcon' src='/media/images/editIcon.svg' alt='Edit'></button>
            </form>
            <form action='/delete-article/" . $article['slug'] . "' method='post'>
                <input type='hidden' name='slug' id='slug' value='" . $article['slug'] . "'>
                <button class='deleteButton' type='submit'><img class='articleCardIcon' src='/media/images/trashIcon.svg' alt='Delete'></button>
            </form>
        </span>";
                }
                echo "</div>";
            }

        } else {
            echo "<p class='result warning'>No articles found</p>";
        }
    }
}