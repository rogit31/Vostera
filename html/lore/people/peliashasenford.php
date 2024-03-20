<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - People - Pelias Hasenford</title>
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
            <li>Pelias Hasenford</li>
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
                <h1>Pelias Hasenford</h1>
                <p>Son of <a href="bettyhasenford.php" class="crosslink"></a>Betty Hasenford</p>, mayor of Afeer village. He is a human fisherman and speaks in a southern accent. Looks about 50, has completely gray hai, leathery damaged skin and smokes a pipe. 
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
