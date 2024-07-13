<!doctype html>
<html lang="en">

<head>
<title> Vostera - Lore - Plot</title>
<?php include __DIR__ . '/../../components/head.php'?>
</head>

<body>
<div id="wrapper">
<ul class="breadcrumb">
    <li><a href="/home">Home</a></li>
    <li><a href="/lore">Lore</a></li>
    <li>Plot</li>
</ul>
<main>
    <?php  include_once  __DIR__ . '/../../components/sideBar.php'; ?>
            <div class="article-tile">
                <h1>Plot Points and Story Beats</h1>
                <p>Notes and plans about what might happen in games. Can't always predict what will happen but it does help to be prepared to what will probably happen.</p>
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