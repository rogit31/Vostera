<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - Places - Fisherman's Repose </title>
    <?php include('../../../head.php') ?>
</head>

<body>
    <div id="wrapper">
        <header id="1">
        <?php include('../../../header.php') ?>
        </header>

        <ul class="breadcrumb">
            <li><a href="../../../index.php">Home</a></li>
            <li><a href="../../lore.php">Lore</a></li>
            <li><a href="places.php">Places</a></li>
            <li>Fisherman's Repose</li>
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
            <h1>The Fisherman's Repose</h1>
            <p>The Fisherman's Repose is a relatively fancy inn facing the sea in the port district of Port Dalia. Owned by Morcant Amine.<p>
        </div>
        </main>
        <div class="button-wrapper">
            <a class="backbutton" href="places.php">Back to places</a>
            <a class="backbutton" href="../../lore.php">Back to lore</a>
        </div>

        <?php include('../../../footer.php')?>
    </div>
</body>

</html>