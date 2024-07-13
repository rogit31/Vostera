<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - Meta</title>
    <?php include __DIR__ . '/../../components/head.php'?>
</head>

<body>
    <div id="wrapper">
        <?php include __DIR__ . '/../../components/header.php' ?>
        <ul class="breadcrumb">
            <li><a href="/home">Home</a></li>
            <li><a href="/lore">Lore</a></li>
            <li>Meta</li>
        </ul>

        <main>
            <?php  include_once  __DIR__ . '/../../components/sideBar.php'; ?>
            <div class="article-tile">
                <h1>Meta</h1>
                <p>The physical laws that govern the world, the calendars, time, and cosmology. Also everything else that didn't fit anywhere else. A lot of these are secret for now :)</p>
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