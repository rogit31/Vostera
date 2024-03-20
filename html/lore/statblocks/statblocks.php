<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - Statblocks</title>
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
            <li>Statblocks</li>
        </ul>
        <main>
            <div class="article-tile">
                <h1>Statblocks</h1>
                <p>A collection of monsters and NPC statblocks likely to come up in game and designed to be accessed as quickly as possible.</p>
            </div>
        <div class="article-cards">
            <a href="imperialguard.php" class="card">
                <div class="header">Imperial Guard</div>
                <div class="body">Must've been the wind...</div>
            </a>
            <?php if (isset($_SESSION['loggedin'])) : ?>
            <a href="peacekeeper_statblock.php" class="card">
                <div class="header">Peacekeepers</div>
                <div class="body">Definitely not just keeping peace</div>
            </a>
            <a href="lucius_aemon_statblock.php" class="card">
                <div class="header">Lucius Aemon</div>
                <div class="body">Fantasy Itachi</div>
            </a>
            <a href="vespera_argent_statblock.php" class="card">
                <div class="header">Vespera Argent</div>
                <div class="body">The BBEG</div>
            </a>
            <a href="vixal_blund_statblock.php" class="card">
                <div class="header">Vixal Blund</div>
                <div class="body">The right hand</div>
            </a>
            <?php endif; ?>
        </div>
        </main>
        <?php include('../../../footer.php')?>
    </div>
</body>

</html>