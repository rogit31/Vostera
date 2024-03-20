<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - People - Elwyn Mardan</title>
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
            <li><a href="people.php">People</a></li>
            <li>Elwyn Mardan</li>
        </ul>
        <div class="sidenav article-tile">
            <ol>
                <li><a href="#1">Top</a></li>
                <?php if (isset($_SESSION['loggedin'])) : ?>
                <li><a href="#2"></a></li>
                <?php endif; ?>
            </ol>
        </div>
        <main>
        <div class="article-tile">
                <h1>Elwyn Mardan</h1>
                <p>Elwyn Mardan is a tiefling nobleman and part of the merchant's guild of Port Dalia. He is a very extravagant man, with an incredible collection of curios and gadgets. He lives in a large gated house in the Merchant District of Port Dalia. Elwyn was a sailor at sea before becoming captain and eventually head of a fleet of commercial ships. He dedicates his free time to collecting these interesting things from all around Vostera. He assigned Cheetoh's Angels with the task to recover an artefact from the Port Dalia academy in exchange for access to <a href="../organizations/underbelly.php" class="crosslink">the underbelly</a>. He also saved Cheetoh's Angels when their mission in the Avendor cellars went awry. Following this disaster, he gave Cheetoh's Angles another mission to get information from <a href="../places/titanfall.php" class="crosslink">titanfall</a>. He is currently traveling in order to dodge the academy. </p>
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