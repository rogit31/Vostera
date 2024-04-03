<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Home </title>
    <meta name="description" content="Vostera is a homebrewed D&D world made with fifth edition in mind. You can find lore, maps, and vostera-specific rules here.">
    <?php include('head.php') ?>
    <script src="/js/slideshow.js" defer="defer"></script>
</head>

<body>
    <div id="wrapper">

        <?php include('header.php') ?>

        <main>
            <h1 id="welcome">WELCOME TO VOSTERA</h1>
            <div class="carousel">
                <button class="carousel_button carousel_button--left is-hidden">
                    <img src="media/leftchevron.svg" alt="left chevron">
                </button>
                <div class="carousel_track-container">
                    <ul class="carousel_track">

                        <li class="carousel_slide current-slide">
                            <a href="html/lore.php"><img class="carousel_image" src="media/brassdragon.jpg" alt="Illustration of a Brass dragon">
                                <h2>LORE</h2>
                            </a>
                        </li>
                        <li class="carousel_slide">
                            <a href="html/playercharacters.php"><img class="carousel_image" src="media/tasha.webp" alt="Mage casting a spell">
                                <h2>PLAYER CHARACTERS</h2>
                            </a>
                        </li>
                        <li class="carousel_slide">
                            <a href="html/lore/places/places.php"><img class="carousel_image" src="media/whitestone.png" alt="Illustration of Whitestone">
                                <h2>PLACES</h2>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="carousel_button carousel_button--right">
                    <img src="media/rightchevron.svg" alt="right chevron">
                </button>
                <div class="carousel_nav">
                    <button class="carousel_indicator current-slide"></button>
                    <button class="carousel_indicator"></button>
                    <button class="carousel_indicator"></button>
                </div>
            </div>
            <div class="article-tile">
                <h3>WHAT IS VOSTERA?</h3>
                <p>Vostera is a fictional homebrewed world made with Dungeons and Dragons 5<sup>th</sup> edition in mind. You may use any and all assets found here though beware, for not all the intellectual property here is mine. This website was made with the intent to use it as a library of information about Vostera and the campaigns around it.</p>
            </div>
            <hr class="rounded">
            <h3>Most recent article</h3>
            
            
            <?php
            include ("db.php");

            // Query to retrieve a random article title from the database
            $sql = "SELECT title, description, url FROM articles
            WHERE (articles.SECRET = 'N') ORDER BY last_updated DESC LIMIT 1";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output random article title and description
                $row = $result->fetch_assoc();
                $random_title = $row["title"];
                $random_description = $row["description"];
                $url = $row["url"];

                echo '
                
    <div class="article-cards">
        <a href=" ' . $url . '" class="card">
                <div class="header">' . $random_title . '</div>
                <div class="body">' . $random_description . '</div>
        </a>
    </div>';
            } else {
                echo "No articles found";
            }
            $conn->close();
            ?> 
            
        </main>
        <?php include ('footer.php') ?>
    </div>
</body>

</html>