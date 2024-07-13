<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - People</title>
    <?php include __DIR__ . '/../../components/head.php'?>
</head>

<body>
    <div id="wrapper">
        <?php include __DIR__ . '/../../components/header.php' ?>
        <ul class="breadcrumb">
            <li><a href="/home">Home</a></li>
            <li><a href="/lore">Lore</a></li>
            <li>People</li>
        </ul>
        <main>
            <?php  include_once  __DIR__ . '/../../components/sideBar.php'; ?>
            <div class="article-tile">
            <h1>People</h1>
            <p>The people of Vostera are the life and blood of the world, conscious entities with their own goals, motivations and aspirations. Some of them have dumb names made up on the spot, others just happen to have names that sound funny no matter how much time I spent trying to find a better one.</p>
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