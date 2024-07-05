<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - <!--Category--> - <!--Title--> </title>
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
            <li><a href= ... ><!--Category--></a></li>
            <li><!--Title--></li>
        </ul>
        <div class="sidenav article-tile">
            <ol>
                <li><a href="#1">Top</a></li>
                <!--Headers-->
            </ol>
        </div>
        <main>
            <div class="article-tile">
                <h1><!--Title--></h1>
                <p><!--Description--></p>
                <hr class="solid">
                <!--Article body-->
            </div>
        </main>
        <div class="button-wrapper">
            <a class="backbutton" href=".php">Back to <!--Category--></a>
            <a class="backbutton" href="../../lore.php">Back to lore</a>
        </div>

      <?php include('../../../footer.php') ?>
    </div>
</body>

</html>