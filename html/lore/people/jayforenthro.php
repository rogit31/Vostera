<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - People - Jay Forenthro</title>
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
            <li>Jay Forenthro</li>
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
                <h1>Jay Forenthro</h1>
                <p>Jay Forenthro was the sheriff and the entirety of the police force of the Afeer village. He was murdered and his offices were torched on fire by the <a href="devumal.php" class="crosslink">Devumal twins</a> in their quest to find and steal the tripal stone that fell into the sheriff's lap. His brother, Knorr Forenthro was one of the player characters and a member of Cheetoh's Angels.</p>
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