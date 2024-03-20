<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - Organizations - The Ashir Empire</title>
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
            <li><a href="organizations.php">Organizations</a></li>
            <li>The Ashir Empire</li>
        </ul>
        <div class="sidenav article-tile">
            <ol>
                <li><a href="#1">Top</a></li>
                <li><a href="#2">History</a></li>
                <li><a href="#3">Nola's legacy</a></li>
                <li><a href="#4">Ashirian Expansion</a></li>
                <li><a href="#5">Politics</a></li>
                <li><a href="#6">Economy</a></li>
                <li><a href="#7">Culture</a></li>

            </ol>
        </div>
        <main>
            <div class="article-tile">
                <h1>The Ashir Empire</h1>
                <p>The Ashir empire is an empire that extends and controls both Eloran and Imar. It is a dynastic empire originally controlled by the Ashirs, a family said to be the descendents of <a href="../people/planewalker.php" class="crosslink">the Planewalker</a>. After <a href="../history/pheonixgate.php" class="crosslink">pheonixgate</a>, the <a href="../people/hudalfamily.php" class="crosslink">the Hudals</a> took over the pheonix's crown and are still currently in power.</p>

                <h2 id="2">History</h2>
                <hr class="solid">
                <p>The first human settlements were in the Ashir valley, where the Planewalker supposedly led the first humans to agriculture, goverment and policy, inspired by <a href="../gods/sola.php" class="crosslink">Sola's</a> light. When the Planewalker died, her firstborn child, <a href="../people/nolaashir.php" class="crosslink">Nola Ashir</a> inherited the position of power she was in. She had also inherited part of her mother's powers, but to some extent wasn't as close to the Sunmother as a human born child. <a href="../places/avendor.php" class="crosslink">Avendor</a> being the settlement the Planewalker birthed and oversaw until her death.

                <?php if (isset($_SESSION['loggedin'])) : ?>
                <h3 id="3">Nola's Legacy</h3>
                <p>She had three children, Kael Ashir, Mikael Ashir, and Sarah Ashir. As Nola grew old, she created more and more institutions in Avendor hoping that Avendor would keep going after her death. As she died, Kael took command. Inheriting most of his mother's powers, he followed in her stead and grew Avendor's influence to fully control the Ashir valley, birthing the Ashir empire in 305 AP.</p>

                <h3 id="4">Ashirian Expansion</h3>
                <p>The Planewalker's descendants expanded Avendor's teritory with brute force, using their family's powers if needed to slaughter anyone facing them, often intimidating any opponents into surrender much before a full blown conflict started. Avendor quickly became a city-state, with the Ashirs overseeing all of it. Eventually realizing that the Ashirs by themselves could not rule the quickly expanding city, they created a senate in order to make policies in their stead while they ruled and conquered the neighboring regions.</p>

                <h2 id="5">Politics</h2>
                <hr class="solid">
                <p>In the Ashir Empire, there is an Emperor who serves as the head of state and government. However, the Emperor's power is limited by a parliament composed of representatives from the various regions of the empire. These representatives are elected by the people of their respective regions, and they meet in the capital city to make decisions on behalf of their constituents.</p>

                <p>The Emperor is responsible for overseeing the overall governance of the empire and ensuring that the parliament's decisions are executed. The Emperor also has the power to veto parliament's decisions, but the parliament can override the Emperor's veto with a two-thirds majority vote.</p>

                <p>This political system ensures that the various regions of the empire have a say in the governance of the empire, while also allowing for a strong central authority in the form of the Emperor. It strikes a balance between democracy and centralization, providing stability and continuity while also allowing for meaningful representation and participation by the people.</p>

                <h2 id="6">Economy</h2>
                <hr class="solid">
                <p></p>

                <h2 id="7">Culture</h2>
                <hr class="solid">
                <p></p>
                <?php endif; ?>


        </main>
        <div class="button-wrapper">
            <a class="backbutton" href="organizations.php">Back to organizations</a>
            <a class="backbutton" href="../../lore.php">Back to lore</a>
        </div>

        <?php include('../../../footer.php')?>
    </div>
</body>

</html>