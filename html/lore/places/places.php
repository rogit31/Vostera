<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - Places</title>
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
            <li>Places</li>

        </ul>
        <main>
            <div class="article-tile">
            <h1>Places</h1>
            <p>Vostera is the name given to the world as a whole. It also encompasses the corresponding mirror planes that exist in Vostera's cosmolgy. Vostera is consituted of five continents and two icy poles, is the approximate size of our earth and has a variety of ecosystems, countries and settlements. Depending on the country and continent, some of it is more or less explored and discovered. Learn more about the places in Vostera in the articles below.</p>
            
        </div>
        <h3>Articles:</h3>
            <div class="article-cards">
                <?php
                include('../../../db.php');

                if (!isset($_SESSION['loggedin'])) {
                    $sql = "SELECT title, description, article_id FROM articles WHERE (articles.SECRET = 'N') AND category = 'places' ORDER BY title";
                } else {
                    $sql = "SELECT title, description, article_id FROM articles WHERE category = 'places' ORDER BY title";
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