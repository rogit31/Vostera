<!doctype html>
<html lang="en">
<head>
    <title> Vostera - Home </title>
    <link rel="canonical" href="https://vostera.net"/>
    <meta name="description"
          content="Vostera is a homebrewed D&D world made with fifth edition in mind. You can find lore, maps, and vostera-specific rules here.">
    <?php include __DIR__ . '/../components/head.php'; ?>
    <?php include __DIR__ . '/../components/articleVisualizer.php' ?>
    <script type="text/javascript"> let articleData = [];
        articleData = <?php echo json_encode($data); ?></script>
    <script src="/js/home.js" defer></script>
    <!--    <script src="/js/visualizer.js" defer></script>-->
</head>

<body>
<div id="wrapper">
    <?php include __DIR__ . '/../components/header.php'; ?>
    <main>

        <?php include_once __DIR__ . '/../components/sideBar.php';
        include_once __DIR__ . '/../components/sideBarMobileButton.php';
        ?>
        <div>
            <h1 id="welcome">WELCOME TO VOSTERA!</h1>
            <aside class="asideHomeInfo">
                <p class="infoLink"><a href="/read-article/getting-started-98">New here?</a></p>
            </aside>
            <div class="">
                <h3>Recent publishes or updates</h3>
                <div id="loadingSpinner" style="display: none;">
                    <img src="/media/images/pixelSword.png" alt="Loading..."/>
                </div>
                <ul class="article-cards homePreview">
                </ul>
            </div>
            <div id="plusWrapper">
                <button id="plus">+ MORE</button>
            </div>
            <!--            <canvas id="canvas" width="600px" height="600px"> </canvas>-->
        </div>

    </main>
</div>
</body>

</html>
