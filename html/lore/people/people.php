<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - People</title>
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
            <li>People</li>
        </ul>
        <main>
            <div class="article-tile">
            <h1>People</h1>
            <p>The people of Vostera are the life and blood of the world, conscious entities with their own goals, motivations and aspirations. Some of them have dumb names made up on the spot, others just happen to have names that sound funny no matter how much time I spent trying to find a better one.</p>
            </div>
            <h3>Articles:</h3>
            <div class="article-cards">
                <?php
                include('../../../db.php');

                if (!isset($_SESSION['loggedin'])) {
                    $sql = "SELECT title, description, article_id FROM articles WHERE (articles.SECRET = 'N') AND category = 'people' ORDER BY title";
                } else {
                    $sql = "SELECT title, description, article_id FROM articles WHERE category = 'people' ORDER BY title";
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