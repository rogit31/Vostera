<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - Items - Aetherates </title>
<?php include('../../../head.php') ?>
</head>

<body>
    <div id="wrapper">
        <header id="1">
        <?php include('../../../header.php') ?>
        </header>
        
        <?php if (!isset($_SESSION['loggedin'])) {
            header('Location: ../../lore.php');
            exit;
        } ?>
        <ul class="breadcrumb">
            <li><a href="../../../index.php">Home</a></li>
            <li><a href="../../lore.php">Lore</a></li>
            <li><a href="items.php">Items</a></li>
            <li>Aetherates</li>
        </ul>
        <div class="sidenav article-tile">
            <ol>
                <li><a href="#1">Top</a></li>
                <li><a href="#2">Liselos</a></li>
                <li><a href="#3">Tripal</a></li>
                <li><a href="#4">Zygonite</a>
                <li><a href="#5">Thaumite</a>
                <li><a href="#6">Nerenite</a>
            </ol>
        </div>
        <main>
            <div class="article-tile">
                <h1>Aetherates</h1>
                <p>Aetherates are a category of material, usually found as a mineral, that possess arcane properties. It is thought that these materials are derived from the bodies of fallen titans. Here is a list of aetherates from most to least common:</p>
                <ul>
                    <li>Liselos</li>
                    <li>Tripal</li>
                    <li>Zygonite</li>
                    <li>Thaumite</li>
                    <li>Nerenite</li>
                </ul>

                <h2 id="2">Liselos</h2>
                <hr class="solid">
                <p><a href="../items/liselos.php">Liselos</a> is a material that is found mostly in the continent of Imar. Its most important property is its capacity to store energy. It is currently used by the Ashir empire to fuel lamps, and in human experimentation by the academy. It is suspected the invasion of Imar was mostly done in an effort to capture its reserves of Liselos.</p>

                <h2 id="3">Tripal</h2>
                <hr class="solid">
                <p><a href="tripal.php" class="crosslink">Tripal</a> is found usually on Eloran. It is rumored that all Tripal comes from a singular titan in Eloran, located at the epicenter of Titanfall, buried deep within the crater. Tripal seems to conduct arcane energy from one place to another at great speeds. The transport of aether requires two pieces of Tripal to be calibrated with each other in frequency. This calibration can be made by an accomplished spellcaster.</p>

            </div>
        </main>
        <div class="button-wrapper">
            <a class="backbutton" href="items.php">Back to items</a>
            <a class="backbutton" href="../../lore.php">Back to lore</a>
        </div>

<?php include ('../../../footer_2level.php')?>
    </div>
</body>

</html>