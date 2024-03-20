<!doctype html>
<html lang="en">

<head>
<title> Vostera - Lore - Plot</title>
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
    <li>Plot</li>
</ul>
<main>
            <div class="article-tile">
                <h1>Plot Points and Story Beats</h1>
                <p>Notes and plans about what might happen in games. Can't always predict what will happen but it does help to be prepared to what will probably happen.</p>
            </div>
        <div class="article-cards">
        <?php  if (isset($_SESSION['loggedin'])): ?>
        <a href="generalnotes.php" class="card">
                <div class="header">General Notes</div>
                <div class="body">What the fuck is happening? </div>
            </a>
            <a href="plot_titanfall.php" class="card">
                <div class="header">Titanfall</div>
                <div class="body">What is happening at this big crater?</div>
            </a>
        <?php endif; ?>
            <a href="recaps.php" class="card">
                <div class="header">Recaps</div>
                <div class="body">What the fuck happened last time?</div>
            </a>
            <?php  if (isset($_SESSION['loggedin'])): ?>
            <a href="titanfallresearchfacility_plot.php" class="card">
                <div class="header">Titanfall Research Facility</div>
                <div class="body">Continuation to Titanfall</div>
            </a>
            <a href="vesperaspeech.php" class="card">
                <div class="header">Vespera's speech</div>
                <div class="body">Rile up the public</div>
            </a>
            <?php endif; ?>
        </div>
        </main>

<?php include('../../../footer.php')?>
</div>
</body>

</html>