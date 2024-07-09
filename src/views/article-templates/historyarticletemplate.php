<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - History - <!--Title--> </title>
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
            <li><a href="/public/index.php">Home</a></li>
            <li><a href="../../lore.php">Lore</a></li>
            <li><a href="history.php">History</a></li>
            <li><!--Title--></li>
        </ul>
        <div class="sidenav article-tile">
            <ol>
            <li><a href="#1">Top</a></li>
            <li><a href="#2">Foundations</a></li>
            <li><a href="#3">Key players</a></li>
            <li><a href="#4">Triggers</a></li>
            <li><a href="#5">Confrontation</a></li>
            <li><a href="#6">Impact</a></li>
            <li><a href="#7">Mysteries</a></li>    
            </ol>
        </div>
        <main>
            <div class="article-tile">
                <h1><!--Title--></h1>
                <p><!--Description--></p>
                <h2 id="2">Foundations</h2>
                <hr class="solid">
                <p></p>
                <h2 id="3">Key players</h2>
                <hr class="solid">
                <p></p>
                <h2 id="4">Triggers</h2>
                <hr class="solid">
                <p></p>
                <h2 id="5">Confrontation</h2>
                <hr class="solid">
                <p></p>
                <h2 id="6">Impact</h2>
                <hr class="solid">
                <p></p>
                <h2 id="7">Mysteries</h2>
                <hr class="solid">
                <p></p>
            </div>
        </main>
        <div class="button-wrapper">
            <a class="backbutton" href="history.php">Back to History</a>
            <a class="backbutton" href="../../lore.php">Back to lore</a>
        </div>

      <?php include('../../../footer.php') ?>
    </div>
</body>

</html>