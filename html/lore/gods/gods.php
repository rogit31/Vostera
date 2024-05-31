<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - Gods</title>
    <?php include('../../../head.php') ?>
</head>

<body>
    <div id="wrapper">
        <header>
            <?php include('../../../header.php'); include_once('../../../new-article-button.php') ?>
        </header>
        <ul class="breadcrumb">
            <li><a href="../../index.php">Home</a></li>
            <li><a href="../../lore.php">Lore</a></li>
            <li>Gods</li>
        </ul>
        <main>
            <div class="article-tile">
                <h1>Gods</h1>

                <p>Vostera's pantheon, their myths, their cults, and rituals. The gods are told to exist in this world and Vosterians everywhere pray for them and see their effects. There is one main loose pantheon that the vast majority of Ashirians follow, the rest of Vostera may look to other gods and systems of belief.</p>
            </div>

            <h3>Articles:</h3>
            <div class="article-cards">
                <?php
                include('../../../db.php');

                if (!isset($_SESSION['loggedin'])) {
                    $sql = "SELECT title, description, article_id FROM articles WHERE (articles.SECRET = 'N') AND category = 'gods' ORDER BY title";
                } else {
                    $sql = "SELECT title, description, article_id FROM articles WHERE category = 'gods' ORDER BY title";
                }

                $result = $pdo->query($sql);

                if ($result->rowCount() > 0) {

                    while ($row = $result->fetch()) {
                        $title = $row["title"];
                        $description = $row["description"];
                        $url = '/read-article.php?id=' . $row["article_id"];

                        echo '
        
        <a href="' . $url . '" class="card">
            <div class="header">' . $title . '</div>
            <div class="body">' . $description . '</div>
        </a>
        ';
                    }
                } else
                {
                    echo "No articles found";
                }
                ?>
        </main>

        <?php include('../../../footer.php') ?>
    </div>
</body>

</html>