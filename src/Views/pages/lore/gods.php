<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - Gods</title>
    <?php include __DIR__ . '/../../components/head.php' ?>
</head>

<body>
    <div id="wrapper">
        <?php include __DIR__ . '/../../components/header.php' ?>
        <ul class="breadcrumb">
            <li><a href="/home">Home</a></li>
            <li><a href="/lore">Lore</a></li>
            <li>Gods</li>
        </ul>
        <main>
            <?php  include_once  __DIR__ . '/../../components/sideBar.php'; ?>
            <div class="article-tile">
                <h1>Gods</h1>
                <p>Vostera's pantheon, their myths, their cults, and rituals. The gods are told to exist in this world and Vosterians everywhere pray for them and see their effects. There is one main loose pantheon that the vast majority of Ashirians follow, the rest of Vostera may look to other gods and systems of belief.</p>
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