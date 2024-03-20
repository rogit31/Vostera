<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - Statblocks - Vespera Argent Statblock</title>
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
            <li><a href="statblocks.php">Statblocks</a></li>
            <li>Vespera Argent</li>
        </ul>
        <div class="sidenav article-tile">
            <ol>
                <li><a href="#1">Top</a></li>
            </ol>
        </div>
        <main>
            <div class="article-tile">
                <h1>Vespera Argent</h1>
                <p><a href="../people/vesperaargent.php" class="crosslink">Vespera Argent</a> is the head of the academy and part of the imperial senate.</p>
                <h2 id="2">Statblock</h2>
                <hr class="solid">
                <img class="statblock" src="../../../media/statblocks/vespera_argent.png" alt="statblock of Vespera Argent">
            </div>
        </main>
        <div class="button-wrapper">
            <a class="backbutton" href="statblocks.php">Back to statblocks</a>
            <a class="backbutton" href="../../lore.php">Back to lore</a>
        </div>

        <?php include('../../../footer.php')?>
    </div>
</body>

</html