<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - Gods</title>
    <?php include('../../../head.php') ?>
</head>

<body>
    <div id="wrapper">
        <header>
            <?php include('../../../header.php') ?>
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
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                if (!isset($_SESSION['loggedin'])) {
                    $sql = "SELECT title, description, url FROM articles WHERE (articles.SECRET = 'N') AND category = 'gods' ORDER BY title";
                } else {
                    $sql = "SELECT title, description, url FROM articles WHERE category = 'gods' ORDER BY title";
                }


                $result = $conn->query($sql);

                if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {
                        $random_title = $row["title"];
                        $random_description = $row["description"];
                        $url = $row["url"];

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
                $conn->close();
                ?>
        </main>

        <?php include('../../../footer.php') ?>
    </div>
</body>

</html>