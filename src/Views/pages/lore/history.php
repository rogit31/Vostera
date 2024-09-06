<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - History</title>
    <?php include __DIR__ . '/../../components/head.php'?>
</head>

<body>
    <div id="wrapper">
        <?php include __DIR__ . '/../../components/header.php' ?>
        <ul class="breadcrumb">
            <li><a href="/home">Home</a></li>
            <li><a href="/lore">Lore</a></li>
            <li>History</li>
        </ul>
        <main>
            <?php  include_once  __DIR__ . '/../../components/sideBar.php'; ?>
            <div class="article-tile">
                <h1>History</h1>
                <p>The history of Vostera is rich in wars, conflicts, revolutions, eras, kingdoms, dynasties, famines, and more. Discover some of the history of Vostera amongst the articles below.</p>
            </div>
            <h3>Articles:</h3>
            <div class="article-cards">
                <?php
                if (!$articles){
                    echo'something went wrong';
                }
                foreach ($articles as $item) {
                    echo '
            
            <li class="resultCard">
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