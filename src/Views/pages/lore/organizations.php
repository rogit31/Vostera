<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - Organizations</title>
    <?php include __DIR__ . '/../../components/head.php'?>
</head>

<body>
    <div id="wrapper">
        <?php include __DIR__ . '/../../components/header.php' ?>
        <ul class="breadcrumb">
            <li><a href="/home">Home</a></li>
            <li><a href="/lore">Lore</a></li>
            <li>Organizations</li>
        </ul>

        <main>
            <?php  include_once  __DIR__ . '/../../components/sideBar.php'; ?>
            <div class="article-tile">
                <h1>Organizations</h1>
                <p>The different kingdoms, churches, empires, terrorist groups, and other organizations that exert their power over Vostera and the people inhabiting it. </p>
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