<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - Places</title>
    <?php include __DIR__ . '/../../components/head.php'?>
</head>

<body>
    <div id="wrapper">
        <?php include __DIR__ . '/../../components/header.php' ?>
        <ul class="breadcrumb">
            <li><a href="/home">Home</a></li>
            <li><a href="/lore">Lore</a></li>
            <li>Places</li>

        </ul>
        <main>
            <?php  include_once  __DIR__ . '/../../components/sideBar.php'; ?>
            <div class="article-tile">
            <h1>Places</h1>
            <p>Vostera is the name given to the world as a whole. It also encompasses the corresponding mirror planes that exist in Vostera's cosmolgy. Vostera is consituted of five continents and two icy poles, is the approximate size of our earth and has a variety of ecosystems, countries and settlements. Depending on the country and continent, some of it is more or less explored and discovered. Learn more about the places in Vostera in the articles below.</p>
            
        </div>
        <h3>Articles:</h3>
            <div class="article-cards">
                    <?php
                    if (!$articles){
                        echo'something went wrong';
                    }
                    foreach ($articles as $item) {
                        echo '
            
            <li class="card">
                  <a href="/read-article/' . $item['slug'] . '">
                        <div class="header">' . $item['title'] . '</div>
                        <div class="body">' . $item['description'] . '</div>
                </a>
            </li>
            ';
                    }
                    ?>
                </div>
        </main>
    </div>
</body>

</html>