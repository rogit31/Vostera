<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - People - <!--Title--> </title>
<?php include('../../../head.php') ?>
</head>

<body id="1">
<div id="wrapper">

<?php include('../../../header.php') ?>

       <!--Redirect for secret articles -->
       <?php if (!isset($_SESSION['loggedin'])) {
            header('Location: ../../lore.php');
            exit;
        } ?>

        <ul class="breadcrumb">
            <li><a href="/index.php">Home</a></li>
            <li><a href="../../lore.php">Lore</a></li>
            <li><a href="people.php">People</a></li>
            <li><!--Title--></li>
        </ul>
        <div class="sidenav article-tile">
            <ol>
                <li><a href="#1">Top</a></li>
                <li><a href="#2">Appearance</a></li>
                <li><a href="#3">RP notes</a></li>
                <li><a href="#4">Backstory</a></li>
            </ol>
        </div>
        <main>
            <div class="article-tile">
                <h1><!--Title--></h1>
                <p><!--Description--></p>
                <h2 id="2">Appearance</h2>
                <hr class="solid">
                <p><!--Think of something quirky and memorable--></p>
                <h3>Voice</h3>
                <audio controls> <source src="../../../media/" type="audio/wav"></audio>
                <h2 id="3">RP notes</h2>
                <hr class="solid">
                <h3>Ideals</h3>
                <p></p>
                <h3>Bonds</h3>
                <p></p>
                <h3>Flaws</h3>
                <p></p>
                <h3>Goals</h3>
                <p></p>
                <h3>Assets</h3>
                <p></p>
                <h3>Actions</h3>
                <p></p>
                <h2 id="4">Backstory</h2>
                <hr class="solid">
                <p></p>

            </div>
        </main>
        <div class="button-wrapper">
            <a class="backbutton" href="people.php">Back to people</a>
            <a class="backbutton" href="../../lore.php">Back to lore</a>
        </div>

      <?php include('../../../footer.php') ?>
    </div>
</body>

</html>