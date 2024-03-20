<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - People - Khava Amina</title>
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
            <li>Khava Amina</li>
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
                <h1>Khava Amina</h1>
                <p>Khava Anima is the Artifactmaster of The Underbelly. She is a middle aged short halfling with bright red hair and wears adjustable spectacles of very intricate construction on the end of her nose at most times. She speaks with a slight English accent in a high tone. A happy go lucky individual that takes pride in her job and is passionate about artifacts from all over Vostera.</p>
                <p>She is a firm believer in the fact that there was an intelligent and advanced humanoid civilization during the Titanic Era. Many of her friends and colleagues at The Underbelly dismiss the artifacts as tools or junk made by the titans and for the titans, or from previous wars that the world forgot about. Some believe her, many more don't. She works in the treasure room in the basement of the Soft Spot. She is very good friends with <a href="raoulragimund.php" class="crosslink">Raoul Ragimund</a>, who while may not believe in all of her theories, believes that there is a lot more to many of the vestiges they steal than what the Academy might say.</p>
                <p>Khava is in charge of handling items to be traded or bought, packaging them and giving them an approximate value for sale as well as for the grand theft-off.</p>
                <p>Khava is supposedly involved in a romantic relationship with Leia Rosenthorne.</p>
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