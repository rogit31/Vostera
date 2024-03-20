<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - People - Roshan Hunfrid</title>
    <?php include('../../../head.php') ?>
</head>

<body>
    <div id="wrapper">
        <header id="1">
            <?php include('../../../header.php') ?>
        </header>
        <?php if (!isset($_SESSION['loggedin'])) {
            header('Location: ../../lore.php');
            exit;
        } ?>
        <ul class="breadcrumb">
            <li><a href="../../../index.php">Home</a></li>
            <li><a href="../../lore.php">Lore</a></li>
            <li><a href="people.php">People</a></li>
            <li>Roshan Hunfrid</li>
        </ul>
        <div class="sidenav article-tile">
            <ol>
                <li><a href="#1">Top</a></li>
                <?php if (isset($_SESSION['loggedin'])) : ?>
                    <li><a href="#2"></a></li>
                <?php endif; ?>
            </ol>
        </div>
        <main>
            <div class="article-tile">
                <h1>Roshan Hunfrid</h1>
                <p>Roshan Hunfrid was <a href="planewalker.html" class="crosslink">Aylin Ashir's</a> husband. He was a researcher on Titan biology during the titanic age. He was murdered for his findings.</p>
                <h2 id="2"></h2>
                <hr class="solid">
            </div>
        </main>
        <div class="button-wrapper">
            <a class="backbutton" href="people.php">Back to people</a>
            <a class="backbutton" href="../../lore.php">Back to lore</a>
        </div>

        <?php include('../../../footer.php') ?>
    </div>
</body>

</html>