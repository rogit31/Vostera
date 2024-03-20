<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - Meta</title>
    <?php include('../../../head.php') ?>
</head>

<body>
    <div id="wrapper">
    <header>
    <?php include('../../../header.php') ?>
        </header>
        <ul class="breadcrumb">
            <li><a href="../../../index.php">Home</a></li>
            <li><a href="../../lore.php">Lore</a></li>
            <li>Meta</li>
        </ul>

        <main>
            <div class="article-tile">
                <h1>Meta</h1>
                <p>The physical laws that govern the world, the calendars, time, and cosmology. Also everything else that didn't fit anywhere else. A lot of these are secret for now :)</p>
            </div>
        <div class="article-cards">
            <a href="aethericdisturbance.php" class="card">
                <div class="header">Aetheric Disturbance</div>
                <div class="body">Magic becomes weird</div>
            </a>

            <a href="drain_condition.php" class="card">
                <div class="header">The Drain</div>
                <div class="body">Powdered, slow, purple death.</div>
            </a>
            <?php if (isset($_SESSION['loggedin'])): ?>
            <a href="metanotes.php" class="card">
                <div class="header">General Meta Notes</div>
                <div class="body">My secret notes hehe :3</div>
            </a>
            <?php endif ?>
        </div>
        </main>

<?php include ('../../../footer.php')?>
    </div>
</body>

</html>