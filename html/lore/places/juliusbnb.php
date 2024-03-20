<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - Places - </title>
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
            <li></li>
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
            <h1>Julius' Bed & Breakfast</h1>
            <p>Julius' bed and breakfast is an inn in Port Dalia's market district. 
                It is three stories high and is filled with paintings made by the owner, Julius Ironbo. The inn also has a secret basement used for private meetings.<p>
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