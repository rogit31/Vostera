<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - Places - <!--Title--> </title>
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
            <li><a href="places.php">Places</a></li>
            <li><!--Title--></li>
        </ul>
        <div class="sidenav article-tile">
            <ol>
                <li><a href="#1">Top</a></li>
                <li><a href="#2">Geography</a></li>
                <li><a href="#3">History</a></li>
                <li><a href="#4">Population</a></li>
                <li><a href="#5">Government & economy</a></li>
                <li><a href="#6">Architecture</a></li>
                <li><a href="#7">Economy</a></li>
                <li><a href="#8">Culture</a></li>
                <li><a href="#9">POIs</a></li>
            </ol>
        </div>
        <main>
            <div class="article-tile">
                <h1><!--Title--></h1>
                <p><!--Description--></p>
                <h2 id="2">Geography</h2>
                <hr class="solid">
                <p></p>
                <h2 id="3">History</h2>
                <hr class="solid">
                <p></p>
                <h2 id="4">Population</h2>
                <hr class="solid">
                <p></p>
                <h2 id="5">Government & economy</h2>
                <hr class="solid">
                <p></p>
                <h2 id="6">Architecture</h2>
                <hr class="solid">
                <p></p>
                <h2 id="7">Economy</h2>
                <hr class="solid">
                <p></p>
                <h2 id="8">Culture</h2>
                <hr class="solid">
                <p></p>
                <h2 id="9">POIs</h2>
                <hr class="solid">
                <p></p>
            </div>
        </main>
        <div class="button-wrapper">
            <a class="backbutton" href="places.php">Back to places</a>
            <a class="backbutton" href="../../lore.php">Back to lore</a>
        </div>

      <?php include('../../../footer.php') ?>
    </div>
</body>

</html>