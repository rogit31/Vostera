<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - People - The Devumal Twins</title>
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
            <li>Devumal Twins</li>
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
                <h1>The Devumal Twins</h1>
                <p>Gabriel is a rogue and Anne is a sorcerer specialized in divination. They are dressed in simple brown leathers and black textiles. They robbed the sheriff of Afeer of the Tripal stone, killed him and burned down the sheriff's office in the process. They were tasked with stealing the Tripal stone by an entity they do not know of but were promised a very substantial amount of coin for. Anne has a scar over her right eye and cheek. </p>
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