<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - Meta - The Drain </title>
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
            <li>The Drain</li>
        </ul>
        <div class="sidenav article-tile">
            <ol>
                <li><a href="#1">Top</a></li>
                <li><a href="#2">Effect</a></li>
                <li><a href="#3">Cure</a></li>
            </ol>
        </div>
        <main>
            <div class="article-tile">
                <h1>The Drain</h1>
                <p>The Drain is an condition that affects creatures that breathe in charged tripal dust present in and around <a href="../places/titanfall.php" class="crosslink">Titanfall</a>.
                
                <?php if (isset($_SESSION['loggedin'])) : ?>
                At the end of a long rest in an affected area, players must make a CON save of 10+ <em>number of consecutive days in affected space</em>. On a failure, player characters feel tired, nauseous and disoriented at first. As the drain progresses, characters look noticeably weaker and paler. Confusion and paranoia become symptoms. Eventually, if the drain settles for too long, the effects become untenable and any living creature dies. Characters suffer the following effects:</p>
                <h2 id="2">Effect</h2>
                <hr class="solid">
                <ul>
                <li>Spellcasters temporarily lose one spell slot, starting by lower level spell slots. Once all level 1 spell slots have been consumed, also gain points of exhaustion. This effect stacks until death.</li>
                    <li>Non-spellcasters temporarily lose one hit die. Once all hit die are consumed, also gain points of exhaustion. This effect stacks until death.</li>
                </ul>
                <h2>Cure and Prevention</h2>
                <hr id="3" class="solid">
                <p>The drain slowly regresses when characters are no longer exposed to charged tripal dust. Leaving the affected area or using respiratory protection and cleaning clothes before sleeping can help. Depending on the solution, modify the DC. The effect can be cleansed using greater restoration. Spending a long rest in a non affected area reduces drain stacks by one.</p>
                <?php endif; ?>
            </div>
        </main>
        <div class="button-wrapper">
            <a class="backbutton" href="../meta/meta.php">Back to meta</a>
            <a class="backbutton" href="../../lore.php">Back to lore</a>
        </div>

<?php include ('../../../footer.php')?>
    </div>
</body>

</html>