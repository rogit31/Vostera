<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - Plot - Vespera's Speech</title>
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
            <li><a href="plot.php">Plot</a></li>
            <li>Vespera's Speech</li>
        </ul>
        <div class="sidenav article-tile">
            <ol>
                <li><a href="#1">Top</a></li>
            </ol>
        </div>
        <main>
            <div class="article-tile">
            <h1>Vespera Speech</h1>
            <h2>Main talking points</h2>
            <hr class="solid">
            <ul>
                <li>Attacks on Avendor/Adenville caused by degenerate terrorists</li>
                <li>The hudal family brought peace but has shown weakness</li>
                <li>The weakness has now invited these attacks</li>
                <li>And we must pick up arms and defend ourselves</li>
                <li>The pheonix shall rise once more from the ashes and we shall be feared again</li>
            </ul>
            </div>
        </main>
        <div class="button-wrapper">
            <a class="backbutton" href="plot.php">Back to plot</a>
            <a class="backbutton" href="../../lore.php">Back to lore</a>
        </div>

        <?php include('../../../footer.php')?>
    </div>
</body>

</html>