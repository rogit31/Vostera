<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - People - Titans</title>
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
            <li><a href="people.php">People</a></li>
            <li>Titans</li>
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
        <h1>The Titans</h1>

                <p>Titans were massive creatures of nature, mineral aether and wild magic roaming the lands of Vostera before genesis.  They were incapable of communicating with each other or reproducing, and as such started fighting or went dormant out of boredom according to the myth. Now, only the traces of their wars and their bodies remain on Vostera.</p>
                <h2 id="2"></h2>
                <hr class="solid">
            </div>
        </main>
        <div class="button-wrapper">
            <a class="backbutton" href="people.php">Back to people</a>
            <a class="backbutton" href="../../lore.php">Back to lore</a>
        </div>

        <?php include('../../../footer.php')?>
    </div>
</body>

</html>