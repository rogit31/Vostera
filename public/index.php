<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Home </title>
    <link rel="canonical" href="https://vostera.net" />
    <meta name="description" content="Vostera is a homebrewed D&D world made with fifth edition in mind. You can find lore, maps, and vostera-specific rules here.">
    <?php
    include('head.php') ?>
    <script src="public/js/slideshow.js" defer="defer"></script>
</head>

<body>
    <div id="wrapper">

        <?php include('header.php');
        include_once('new-article-button.php') ?>
        <main>
            <h1 id="welcome">WELCOME TO VOSTERA</h1>
            <div class="carousel">
                <span class="carousel_button carousel_button--left is-hidden">
                    <img src="public/media/images/leftchevron.svg" alt="left chevron">
                </span>
                <div class="carousel_track-container">
                    <ul class="carousel_track">

                        <li class="carousel_slide current-slide">
                            <a href="src/views/pages/lore.php"><img class="carousel_image" src="public/media/images/brassdragon.jpg" alt="Illustration of a Brass dragon">
                                <h2>LORE</h2>
                            </a>
                        </li>
                        <li class="carousel_slide">
                            <a href="src/views/pages/playercharacters.php"><img class="carousel_image" src="public/media/images/tasha.webp" alt="Mage casting a spell">
                                <h2>PLAYER CHARACTERS</h2>
                            </a>
                        </li>
                        <li class="carousel_slide">
                            <a href="src/views/pages/places.php"><img class="carousel_image" src="public/media/images/whitestone.png" alt="Illustration of Whitestone">
                                <h2>PLACES</h2>
                            </a>
                        </li>
                    </ul>
                </div>
                <span class="carousel_button carousel_button--right">
                    <img src="public/media/images/rightchevron.svg" alt="right chevron">
                </span>
                <div class="carousel_nav">
                    <span class="carousel_indicator current-slide"></span>
                    <span class="carousel_indicator"></span>
                    <span class="carousel_indicator"></span>
                </div>
            </div>
            <div class="article-tile">
                <h3>WHAT IS VOSTERA?</h3>
                <p>Vostera is a fictional homebrewed world made with Dungeons and Dragons 5<sup>th</sup> edition in mind. You may use any and all assets found here though beware, for not all the intellectual property here is mine. This website was made with the intent to use it as a library of information about Vostera and the campaigns around it.</p>
            </div>
            <hr class="rounded">
            <h3>Most recent article</h3>
            <?php
            include('db.php');
            $sql = "SELECT title, description, article_id FROM articles
            WHERE (articles.SECRET = 'N') ORDER BY last_updated DESC LIMIT 1";

            $stmt = $pdo->query($sql);

            if ($stmt->rowCount() > 0) {
                $row = $stmt->fetch();
                $random_title = $row["title"];
                $random_description = $row["description"];
                $id = $row["article_id"];
                $url = '/read-article.php?id=' . $id;

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
            ?> 
            
        </main>
        <?php
        include('footer.php') ?>
    </div>
</body>

</html>