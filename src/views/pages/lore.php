<!doctype html>
<html lang="en">

<head>
    <title>Vostera - Lore</title>
    <?php
    include('../head.php') ?>
</head>

<body>
    <div id="wrapper">
    <header>
    <?php include('../header.php');  include_once('../new-article-button.php') ?>
        </header>
        <main>
            <h1>VOSTERA'S LORE</h1>
            
            <nav>
                <ul class="tile-nav">
                    
                <li class="category-tile">
                    <a href="../html/lore/history/history.php">
                    <h3>HISTORY</h3>
                    <img src="../public/media/images/pheonixlogo.svg" class="tile-logo" alt="logo of a phoenix">
                </a>
            </li>
                <li class="category-tile">
                    <a href="../html/lore/places/places.php">
                    <h3>PLACES</h3>
                    <img src="../public/media/images/geographylogo.svg" class="tile-logo" alt="logo of a globe">
                </a>
            </li>
                <li class="category-tile">
                    <a href="../html/lore/people/people.php">
                    <h3>PEOPLE</h3>
                    <img src="../public/media/images/crownlogo.svg" class="tile-logo" alt="logo of a crown">
                </a>
            </li>
                <li class="category-tile">
                    <a href="../html/lore/items/items.php">
                    <h3>ITEMS</h3>
                    <img src="../public/media/images/swordlogo.svg" class="tile-logo" alt="logo of a sword">
                </a>
            </li>
                <li class="category-tile">
                    <a href="../html/lore/gods/gods.php">
                    <h3>GODS</h3>
                    <img src="../public/media/images/prayinglogo.svg" class="tile-logo" alt="logo of praying hands">
                </a>
            </li>
                <li class="category-tile">
                    <a href="../html/lore/organizations/organizations.php">
                    <h3>ORGANIZATIONS</h3>
                    <img src="../public/media/images/academylogo.svg" class="tile-logo" alt="logo of three trees">
                    </a>
            </li>
                <li class="category-tile">
                    <a href="../html/lore/plot/plot.php">
                    <h3>PLOT</h3>
                    <img src="../public/media/images/flowerlogo.svg" class="tile-logo" alt="logo of a flower">
                    </a>
            </li>
                <li class="category-tile">
                    <a href="../html/lore/statblocks/statblocks.php">
                    <h3>STATBLOCKS</h3>
                    <div>
                    <img src="../public/media/images/turtlelogo.svg" class="tile-logo" alt="logo of a turtle">
                    </div>
                </a>
            </li>
                <li class="category-tile">
                    <a href="../html/lore/meta/meta.php">
                    <h3>META & MISC</h3>
                    <img src="../public/media/images/hourglasslogo.svg" class="tile-logo" alt="logo of an hourglass">
                </a>
            </li>
            </ul>
        </nav>

        <h3>All articles:</h3>
        <div class="article-cards">
        <?php

include('../db.php');

if (!isset($_SESSION['loggedin'])){
    $sql = "SELECT title, description, article_id FROM articles WHERE (articles.SECRET = 'N') ORDER BY title";}
else {
    $sql = "SELECT title, description, article_id FROM articles ORDER BY title";
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
} else //just in case
 {
    echo "No articles found";
}


?> 
       
</div>

        </main>

            <?php
            include('../footer.php') ?>
    </div>
</body>

</html>