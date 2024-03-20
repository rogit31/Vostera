<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - History - Pheonixgate </title>
    <?php include('../../../head.php')?>
</head>

<body>
    <div id="wrapper">
        <header id="1">
        <?php include('../../../header.php')?>
        </header>

        <ul class="breadcrumb">
            <li><a href="../../../index.php">Home</a></li>
            <li><a href="../../lore.php">Lore</a></li>
            <li><a href="history.php">History</a></li>
            <li>Pheonixgate</li>
        </ul>
        <div class="sidenav article-tile">
            <ol>
                <li><a href="#1">Top</a></li>
                <li><a href="#2">Trial</a></li>
                <li><a href="#3">Consequences</a></li>
            </ol>
        </div>

        <main>
            <div class="article-tile">
                <h1>Pheonixgate</h1>
                <p>Pheonixgate is a political event that happened in 634 AP. where the Ashir bloodline that was holding the pheonix's crown since its inception was dethroned by the <a href="../people/hudalfamily.php" class="crosslink">Hudal family</a> and <a href="../organizations/solascouncil.php" class="crosslink">Sola's council</a>. The Ashir bloodline was found guilty of treason, conspiracy against the empire, and grand heresy. The evidence presented to Sola's council was unanimous and the judgement was swift. The Entire Ashir bloodline was publicly executed in what is known as the the rebirth.</p>
                <?php if (isset($_SESSION['loggedin'])) : ?>
                    <h2 id="2">Trial</h2>
                    <hr class="solid">
                    <p>The ashirs were found guilty of treason when the argent family discovered the books of genesis and their secrets. The main argument was that the fact that the ashirs knew that the main reason for the aetheric re-emergence was the survival of Nola Ashir, and knew about the potential consequences and the creation of the academy. </p>
                    <h2 id="3">Consequences</h2>
                    <hr class="solid">
                    <p>Besides older elves and half elves that have lived during Ashir rule, most know remember the first Ashirian expansion as a distant memory. Most see the rebirth as a good thing. The empire stopped expanding, the academy had its power cut back, the empire became more stable after a few decades of unrest. With this came a more democratic parliament and a displacement of the old traditions of the Pheonix's trial.</p>
                <?php endif; ?>

            </div>
        </main>
        <div class="button-wrapper">
            <a class="backbutton" href="../history/history.php">Back to history</a>
            <a class="backbutton" href="../../lore.php">Back to lore</a>
        </div>
        <?php include('../../../footer.php') ?>
    </div>
</body>

</html>