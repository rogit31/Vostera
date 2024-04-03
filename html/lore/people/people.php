<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - People</title>
    <?php include('../../../head.php') ?>
</head>

<body>
    <div id="wrapper">
        <header id="1">
        <?php include('../../../header.php') ?>
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
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                if (!isset($_SESSION['loggedin'])) {
                    $sql = "SELECT title, description, url FROM articles WHERE (articles.SECRET = 'N') AND category = 'people' ORDER BY title";
                } else {
                    $sql = "SELECT title, description, url FROM articles WHERE category = 'people' ORDER BY title";
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
        <?php include('../../../footer.php')?>
    </div>
</body>

</html>