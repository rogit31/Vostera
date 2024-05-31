<!doctype html>
<html lang="en">

<head>
<title> Vostera - Lore - Plot</title>
<?php include('../../../head.php') ?>
</head>

<body>
<div id="wrapper">
<header id="1">
<?php include('../../../header.php'); include_once('../../../new-article-button.php') ?>
</header>
<ul class="breadcrumb">
    <li><a href="../../../index.php">Home</a></li>
    <li><a href="../../lore.php">Lore</a></li>
    <li>Plot</li>
</ul>
<main>
            <div class="article-tile">
                <h1>Plot Points and Story Beats</h1>
                <p>Notes and plans about what might happen in games. Can't always predict what will happen but it does help to be prepared to what will probably happen.</p>
            </div>
            <h3>Articles:</h3>
            <div class="article-cards">
                <?php
                include('../../../db.php');

                if (!isset($_SESSION['loggedin'])) {
                    $sql = "SELECT title, description, article_id FROM articles WHERE (articles.SECRET = 'N') AND category = 'plot' ORDER BY title";
                } else {
                    $sql = "SELECT title, description, article_id FROM articles WHERE category = 'plot' ORDER BY title";
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
                } else //just in case
                {
                    echo "No articles found";
                }
                ?>
        </main>

<?php include('../../../footer.php')?>
</div>
</body>

</html>