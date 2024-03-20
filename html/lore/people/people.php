<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - People</title>
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
            <li>People</li>
        </ul>
        <main>
            <div class="article-tile">
            <h1>People</h1>
            <p>The people of Vostera are the life and blood of the world, conscious entities with their own goals, motivations and aspirations. Some of them have dumb names made up on the spot, others just happen to have names that sound funny no matter how much time I spent trying to find a better one.</p>
            </div>
        <div class="article-cards">
            <a href="adamfawcett.php" class="card">
                <div class="header">Adam Fawcett</div>
                <div class="body">Adenville's High priest, helped you on your mission.</div>
            </a>
            <a href="alexanderhasan.php" class="card">
                <div class="header">Alexander Hasan</div>
                <div class="body">Leader of the ALF</div>
            </a>
            <a href="anatoliosvishal.php" class="card">
                <div class="header">Anatolios Vishal</div>
                <div class="body">Grand theft-off number wan.</div>
            </a>
            <a href="astridleapol.php" class="card">
                <div class="header">Astrid Leapol</div>
                <div class="body">Captain of the lazy beaver.</div>
            </a>
            <a href="barackshelano.php" class="card">
                <div class="header">Barack Shelano</div>
                <div class="body">Main contact between Hemlock and the Underbelly.</div>
            </a>
            <a href="bettyhasenford.php" class="card">
                <div class="header">Betty Hasenford</div>
                <div class="body">The assistant of Sheriff Jay.</div>
            </a>
            <a href="dareej.php" class="card">
                <div class="header">Dareej</div>
                <div class="body">Young girl wanted by the academy.</div>
            </a>
            <a href="devumal.php" class="card">
                <div class="header">The Devumal Twins</div>
                <div class="body">The thieves that murdered Jay Forenthro and stole the tripal stone.</div>
            </a>
            <a href="elwynmardan.php" class="card">
                <div class="header">Elwyn Mardan</div>
                <div class="body">The one and only.</div>
            </a>
            <a href="gerald.php" class="card">
                <div class="header">Gerald</div>
                <div class="body">The Soft Spot bartender.</div>
            </a>
            <a href="headmastervonn.php" class="card">
                <div class="header">Headmaster Vonn</div>
                <div class="body"><p>The headmaster of the academy school in Port Dalia that caught <s>REDACTED</s>.</p></div>
            </a>
            <a href="jayforenthro.php" class="card">
                <div class="header">Jay Forenthro</div>
                <div class="body">The murdered sheriff that started it all.</div>
            </a>
            <a href="karishuhrat.php" class="card">
                <div class="header">Kari Shuhrat</div>
                <div class="body">The mayor of Port Dali.</div>
            </a>
            <a href="khavaamina.php" class="card">
                <div class="header">Khava Amina</div>
                <div class="body">The artifactmaster.</div>
            </a>
            <a href="leucisaemon.php" class="card">
                <div class="header">Leucis Aemon</div>
                <div class="body">Lucina's long-lost brother.</div>
            </a>
            <a href="nolaashir.php" class="card">
                <div class="header">Nola Ashir</div>
                <div class="body">First ruler of the Ashir Empire.</div>
            </a>
            <a href="peliashasenford.php" class="card">
                <div class="header">Pelias Hasenford</div>
                <div class="body">Mayor of Afeer village.</div>
            </a>
            <a href="planewalker.php" class="card">
                <div class="header">The Planewalker</div>
                <div class="body">D&D Jesus.</div>
            </a>
            <a href="raoulragimund.php" class="card">
                <div class="header">Raoul Ragimund</div>
                <div class="body">The head of the Underbelly.</div>
            </a>
            <?php if (isset($_SESSION['loggedin'])) : ?>
            <a href="roshanhunfrid.php" class="card">
                <div class="header">Roshan Hunfrid</div>
                <div class="body"><s>SECRET</s></div>
            </a>
            <a href="titans.php" class="card">
                <div class="header">The Titans</div>
                <div class="body"><s>SECRET</s></div>
            </a>
            <a href="vesperaargent.php" class="card">
                <div class="header">Vespera Argent</div>    
                <div class="body"><s>SECRET</s></div>
            </a>
            <a href="vixalblund.php" class="card">
                <div class="header">Vixal Blund</div>
                <div class="body"><s>SECRET</s></div>
            </a>
            <?php endif; ?>
        </div>

        </main>
        <?php include('../../../footer.php')?>
    </div>
</body>

</html>