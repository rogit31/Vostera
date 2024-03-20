<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - Items</title>
    <?php include('../../../head.php') ?>
</head>

<body>
    <div id="wrapper">
    <header>
    <?php include('../../../header.php') ?>
        </header>
        <ul class="breadcrumb">
            <li><a href="../../index.php">Home</a></li>
            <li><a href="../../lore.php">Lore</a></li>
            <li>Items</li>
        </ul>

        <main>
            <div class="article-tile">
                <h1>Items</h1>
                <p>From the magical to the mundane, Vostera is filled with things that deserve note. Below are some of the custom items that populate Vostera.</p>
            </div>
        <div class="article-cards">
        <?php if (isset($_SESSION['loggedin'])): ?>
            <a href="aetherates.php" class="card">
                <div class="header">Aetherates</div>
                <div class="body">Magical rocks 'innit</div>
            </a>
            <?php endif; ?>
            <a href="ariasgift.php" class="card">
                <div class="header">Aria's Gift</div>
                <div class="body">A really cool flute. Also technically Raoul's gift</div>
            </a>
            <?php if (isset($_SESSION['loggedin'])): ?>
            <a href="booksofgenesis.php" class="card">
                <div class="header">Books of Genesis</div>
                <div class="body">Books left by Aylin Ashir to secure the domination of the Academy</div>
            </a>
            <?php endif; ?>
            <a href="haul.php" class="card">
                <div class="header">Haul</div>
                <div class="body">Stuff that they got</div>
            </a>
            <a href="facelesscloak.php" class="card">
                <div class="header">Faceless Cloak</div>
                <div class="body">A magical cloak given to you by Elwyn Mardan</div>
            </a>
            <a href="liselos.php" class="card">
                <div class="header">Liselos</div>
                <div class="body">Green rock that functions as a battery</div>
            <a href="tripal.php" class="card">
                <div class="header">Tripal</div>
                <div class="body">I love the color purple</div>
            </a>
            </a>
        </div>
        </main>
<?php include ('../../../footer.php')?>
    </div>
</body>

</html>