<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - History</title>
    <?php
    include('../../../head.php') ?>
</head>

<body>
    <div id="wrapper">
    <header>
    <?php include('../../../header.php');
    include_once('../../../new-article-button.php') ?>
        </header>

        <ul class="breadcrumb">
            <li><a href="../../../public/index.php">Home</a></li>
            <li><a href="lore.php">Lore</a></li>
            <li>History</li>
        </ul>
        <main>
            <div class="article-tile">
                <h1>History</h1>
                <p>The history of Vostera is rich in wars, conflicts, revolutions, eras, kingdoms, dynasties, famines, and more. Discover some of the history of Vostera amongst the articles below.</p>
            </div>
            <h3>Articles:</h3>
            <div class="article-cards">
                <?php

                include('../../../db.php');

                if (!isset($_SESSION['loggedin'])) {
                    $sql = "SELECT title, description, article_id FROM articles WHERE (articles.SECRET = 'N') AND category = 'history' ORDER BY title";
                } else {
                    $sql = "SELECT title, description, article_id FROM articles WHERE category = 'history' ORDER BY title";
                }


                $result = $pdo->query($sql);

                if ($result->rowCount() > 0) {

                    while ($row = $result->fetch()) {
                        $random_title = $row["title"];
                        $random_description = $row["description"];
                        $url = '/read-article.php?id=' . $row["article_id"];

                        echo '
        
        <a href="' . $url . '" class="card">
            <div class="header">' . $random_title . '</div>
            <div class="body">' . $random_description . '</div>
        </a>
        ';
                    }
                }
                ?>
        </main>

<?php
include('../../../footer.php') ?>
    </div>
</body>

</html>