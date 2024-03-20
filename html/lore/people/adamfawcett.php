<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - People - Adam Fawcett</title>
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
            <li>Adam Fawcett</li>
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
            <h1>Adam Fawcettt</h1>
                <p>Adam Fawcett is the high priest of the <a href="#" class="crosslink">Silver Moon Church</a> in Adenville. He was kind enough to restore hemlock to his original pre-cursed young state for only the cost of the component used of greater restoration.</p>
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