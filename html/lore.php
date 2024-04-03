<!doctype html>
<html lang="en">

<head>
    <title>Vostera - Lore</title>
    <?php include('../head.php') ?>
</head>

<body>
    <div id="wrapper">
    <header>
    <?php include('../header.php') ?>
        </header>
        <main>
            <h1>VOSTERA'S LORE</h1>
            
            <nav>
                <ul class="tile-nav">
                    
                <li class="category-tile">
                    <a href="../html/lore/history/history.php">
                    <h3>HISTORY</h3>
                    <img src="../media/pheonixlogo.svg" class="tile-logo" alt="logo of a phoenix">
                </a>
            </li>
                <li class="category-tile">
                    <a href="../html/lore/places/places.php">
                    <h3>PLACES</h3>
                    <img src="../media/geographylogo.svg" class="tile-logo" alt="logo of a globe">
                </a>
            </li>
                <li class="category-tile">
                    <a href="../html/lore/people/people.php">
                    <h3>PEOPLE</h3>
                    <img src="../media/crownlogo.svg" class="tile-logo" alt="logo of a crown">
                </a>
            </li>
                <li class="category-tile">
                    <a href="../html/lore/items/items.php">
                    <h3>ITEMS</h3>
                    <img src="../media/swordlogo.svg" class="tile-logo" alt="logo of a sword">
                </a>
            </li>
                <li class="category-tile">
                    <a href="../html/lore/gods/gods.php">
                    <h3>GODS</h3>
                    <img src="../media/prayinglogo.svg" class="tile-logo" alt="logo of praying hands">
                </a>
            </li>
                <li class="category-tile">
                    <a href="../html/lore/organizations/organizations.php">
                    <h3>ORGANIZATIONS</h3>
                    <img src="../media/academylogo.svg" class="tile-logo" alt="logo of three trees">
                    </a>
            </li>
                <li class="category-tile">
                    <a href="../html/lore/plot/plot.php">
                    <h3>PLOT</h3>
                    <img src="../media/flowerlogo.svg" class="tile-logo" alt="logo of a flower">
                    </a>
            </li>
                <li class="category-tile">
                    <a href="../html/lore/statblocks/statblocks.php">
                    <h3>STATBLOCKS</h3>
                    <div>
                    <img src="../media/turtlelogo.svg" class="tile-logo" alt="logo of a turtle">
                    </div>
                </a>
            </li>
                <li class="category-tile">
                    <a href="../html/lore/meta/meta.php">
                    <h3>META & MISC</h3>
                    <img src="../media/hourglasslogo.svg" class="tile-logo" alt="logo of an hourglass">
                </a>
            </li>
            </ul>
        </nav>

        <h3>All articles:</h3>
        <div class="article-cards">
        <?php

include('../db.php');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (!isset($_SESSION['loggedin'])){
    $sql = "SELECT title, description, url FROM articles WHERE (articles.SECRET = 'N') ORDER BY title";}
else {
    $sql = "SELECT title, description, url FROM articles ORDER BY title";
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


// Close connection
$conn->close();
?> 
       
</div>

        </main>

            <?php include ('../footer.php') ?>
    </div>
</body>

</html>