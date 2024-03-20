<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - People - Anatolios Vishal</title>
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
            <li>Anatolios Vishal</li>
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
                <h1>Anatolios Vishal</h1>
                <p>Anatolios Vishal is the current rank number one thief based off of the <a href="#" class="crosslink">Grand Theft-Off</a> board at the <a href="../organizations/underbelly.php" class="crosslink">Underbelly</a>.</p>
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
