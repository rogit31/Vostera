
<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - Meta - Meta Notes </title>
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
            <li><a href="meta.php">Meta</a></li>
            <li>Meta Notes</li>
        </ul>
        <div class="sidenav article-tile">
            <ol>
                <li><a href="#1">Top</a></li>
                <li><a href="#2">Accepted as true</a></li>
                <li><a href="#3">Actually true</a></li>
            </ol>
        </div>
        <?php if (!isset($_SESSION['loggedin'])) {
            header('Location: ../../lore.php');
            exit;
        } ?>
        <main>
            <div class="article-tile">
                <h1>Meta Notes</h1>
                <p>Here are a few things that could be assumptions about the world that are true or aren't true.</p>
                <h2 id="2">Meta-defining questions about the world, what is accepted as true</h2>
                <hr class="solid">
                <ul>
                    <li>The creation myth is that the gods created the world, the titans caused the thousand year winter, and Sola is the reason for this second era of existence.</li>
                    <li>Magic is a gift from the gods to enact upon the world around them. Different classes represent differing levels of relations to the god. Clerics fully rely on the gods while wizards and sorcerers are chosen by the gods as their champions and are even more rare. Not everyone is given this gift, it's a rare one and must be used responsibly. If it isn't, the academy steps in. </li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <h2>What is in fact true</h2>
                <hr class="solid">
                <ul>
                    <li>The gods didn't even exist before the planewalker. Vostera was born of itself and was full of magic, and it came about naturally, and this was a known fact before the planewalker. The titans used to live in cohabitation with humanoid races. The planewalker ended this and caused the thousand year winter, created the gods. The gods are a living representation of people's faith and imagination, effectively the gods were created by the humanoids not the other way around. </li>
                    <li>Magic has always existed on its own. It is present among every living and even non-living thing to a certain extent. Everyone was capable of weaving spells before the planewalker. The effects of the triapl bomb were that the world itslef was stripped of its magic. <s>The planewalker took as many newborns as she could from different species and races, stealing her late husband's collection. She stripped them of their magic with exposure to tripal treated bombs. Except her daughter. She believed in her. She thought that her daughter would be able to control her powers, would lead with kindness and compassion. She would teach her. She set off the bomb, and before it detonated teleported to a pocket plane that would pass time much faster than on Vostera. When she came out the only beings that where capable of weaving spells were Aylin and Nora Ashir. The rest of the world was stripped bare of all its magic. </s>, as the world slowly heals, more and more people are realizing that they are able to cast spells. Even the ones who aren't descendants of the ashirians. The world is healing and becoming more and more magical again.  </li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </main>
        <div class="button-wrapper">
            <a class="backbutton" href="meta.php">Back to Meta</a>
            <a class="backbutton" href="../../lore.php">Back to lore</a>
        </div>

<?php include ('../../../footer.php')?>
    </div>
</body>

</html>