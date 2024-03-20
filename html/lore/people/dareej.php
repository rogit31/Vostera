<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - People - Dareej</title>
    <?php include('../../../header.php') ?>
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
            <li>Dareej</li>
        </ul>
        <div class="sidenav article-tile">
            <ol>
                <li><a href="#1">Top</a></li>
                <li><a href="#2">Appearances</a></li>
                <?php if (isset($_SESSION['loggedin'])) : ?>
                <li><a href="#3">Backstory</a></li>
                <?php endif; ?>
            </ol>
        </div>
        <main>
        <div class="article-tile">
                <h1>Dareej Priamos</h1>
                <p>Sorcerer girl about 12 years of age, curly brown hair tied in a ponytail and a long raised nose. Escaped from Avendor's academy facilities and is wanted by the academy with the promise of 1000 gold dead or alive.</p>
                <h2 id="2">Appearances</h2>
                <hr class="solid">
                <p>She was seen on a wanted poster in Afeer, and attempted to steal the tripal stone from under the players' noses and failed to do so.</p>

                <?php if (isset($_SESSION['loggedin'])) : ?>
                <h2 id="3">Backstory</h2>
                <hr class="solid">

                    <p>Dareej Priamos was born in the heart of the Ashir Empire, in the bustling city of Avendor. She was a gifted child, displaying a natural talent for the arcane arts from a young age. Recognizing her potential, Dareej was soon recruited by the Avendor Academy, where she honed her skills under the strict guidance of the academy's teachers.</p>
                    
                    <p>For years, Dareej studied and trained diligently, determined to become one of the academy's top students. However, as time passed, she began to grow disillusioned with the academy's strict rules and rigid teachings. She started to question the Ashir Empire's values and beliefs, particularly their use of modify memory spells.</p>
                    
                    <p>Eventually, Dareej could take it no longer. She made the bold decision to flee the academy and strike out on her own, determined to forge her own path and make a difference in the world. Over time, she joined forces with the Order of the Black Sun, drawn to their ideals of freedom and independence.</p>
                    
                    <p>Now, Dareej is one of the Order's top agents, tasked with carrying out some of their most dangerous missions. Her skills as an arcane practitioner make her a valuable asset to the organization, and she is known for her resourcefulness and cunning. However, deep down, Dareej still harbors a sense of guilt over her decision to abandon the academy and the life she left behind.</p>
                    <?php endif; ?>

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