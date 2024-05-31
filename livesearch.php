<?php
include("db.php");
session_start();

if (isset($_POST['input'])) {
    $input = $_POST['input'];
    $inputParam = '%' . $input . '%';

    if (isset($_SESSION['loggedin'])) {
        // User is logged in
        $query = "SELECT title, article_id FROM articles WHERE title LIKE ?";
        $stmt = $pdo->prepare($query);

        try {
            $stmt->execute([$inputParam]);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $e) {
            echo $e->getMessage();
        }
    } else {
        // User is not logged in
        $query = "SELECT title, article_id FROM articles WHERE title LIKE ? AND secret = 'N'";
        $stmt = $pdo->prepare($query);

        try {
            $stmt->execute([$inputParam]);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    if ($result) {
        foreach ($result as $row) {
            $title = $row["title"];
            $url = '/read-article.php?id=' . $row["article_id"];
            echo '<a class="result" href="' . $url . '">' . $title . '</a>';
        }
    } else {
        echo " <p class='result warning'  >No articles found</p>";
    }
}

