<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - Plot - Titanfall</title>
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
            <li><a href="plot.php">Plot</a></li>
            <li>Titanfall</li>
        </ul>
        <div class="sidenav article-tile">
            <ol>
                <li><a href="#1">Top</a></li>
            </ol>
        </div>
        <main>
        <div class="article-tile">
                <h1>Titanfall Plot Points</h1>
                <p></p>
                <h2 id="2">Travel to Titanfall</h2>
                <hr class="solid">
                <h3>Trip beginning</h3>
                <ul>
                <li>Describe sudden change in scenery; trees, bushes, moss suddenly stops, to inhospitable, desert, dry flatlands. Eerily quiet, only the sound of a strong wind whistling across the dry plains. The smell changes from an lush earthy smell to the smell of dry rocks roasting in the sun with a slightly metallic smell.</li>
                <li>A few hours in, you notice Cheetoh beginning to be visibly uncomfortable, meowing louder and hiding in your clothes.</li>
                <li>In the distance you see the scenery change slightly. The flat horizon of argileous lands seems to break, with the odd upright slab of rock, sitting at different slanted angles.</li>
                <li>No encounters, can mention how that seems odd</li>
                </ul>
                <h3>First rest</h3>
                <ul>
                    <li>Maybe Lucina dreams?</li>
                    <li>Roll a constitution saving throw when they wake up. On fail, PCs are <a href="drain_condition.html" class="crosslink">drained</a>.</li>
                    <li>If Robyn is ok with it, have the underbelly/ <a href="../people/raoulragimund.html" class="crosslink">Raoul</a> contact her. Expand on what is said.</li>
                </ul>
                <h3>Second day</h3>
                <ul>
                    <li>The scenery slowly changes as you walk towards your destination. The rock protrusions become more and more common, leaving you finding paths in between them as if looking for a path in a maze. The slight metallic smell is replaced with a certain slight heaviness, as if before a storm despite there not being a cloud in sight.</li>
                    <li>Cheetoh at this point is fully hidden in your bags.</li>
                    <li>Cross paths with a note left by a previous adventurer that reads: "May thine death be swifter than mine, and may you heed my warning shall thy come across it. In front of thee there lays no treasure, sacred land or truth. Ahead lays the promise of a godless..." written in blood on a stone that supports the body of the skeleton of this perished adventurer. On their body, you find simple adventuring gear, a dagger, a map to titanfall and seven gold pieces that are of a different mint. With a successful history check of 14+, PC's date this coin to approximately 40 years ago. </li>
                </ul>
                <h3>Third day</h3>
                <ul>
                    <li>There is now no space left in between the rocks for you to walk. The air feels even thicker, and the feeling of an incoming storm stronger than ever. For those who have hair, your hair is frizzy and lifting itself. The weather remains as dry as when you started, reminding you of the mogu desert if not for the feeling of an impending storm.  </li>
                    <li>The rocks seem to come to a peak. As you climb the peak of jagged rocks, below you, a massive crater about a hundred kilometers across. You stand for a moment in awe at the size of this gigantic hole in the ground, as if the planet itself was collapsing on itself in this point, sinking. In the center of this crater, you immediately notice movement. A gigantic worm moves under the rocks and is tunneling around the crater, seemingly trying to find it's next victim. A perception check of 18+ notices the irregularities in the light reflecting on the rocks being pushed by this creature, or a rip in the illusion. This is illusory. </li>
                    <li>The plot continues in the <a href="titanfallresearchfacility_plot.html" class="crosslink">Titanfall Research Facility article</a>.</li>
                </ul>
            </div>
        </main>
        <div class="button-wrapper">
            <a class="backbutton" href="plot.php">Back to plot</a>
            <a class="backbutton" href="../../lore.php">Back to lore</a>
        </div>

        <?php include('../../../footer.php')?>
    </div>
</body>

</html>