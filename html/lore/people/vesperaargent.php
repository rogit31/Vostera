<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - People - Vespera Argent</title>
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
            <li><a href="people.php">People</a></li>
            <li>Vespera Argent</li>
        </ul>
        <div class="article-tile">
                <h1>Vespera Argent</h1>
                <p></p>
                <h2 id="2">A bunch of evil shit she did</h2>
                <hr class="solid">
                <ul>
                    <li>Killed Hemlock's parents because Hemlock's father advised against the export of Liselos to the Ashir empire</li>
                    <li>Encouraged the use of Liselos injections despite she knew of the effects of liselos infections</li>
                    <li>Hemlock's accident in Imar is a direct result of Vespera wanting to test him. He is failed second in command.</li>
                    <li>Could or could not be the reason for only Lucina escaping from the academy.</li>
                    <li>Encouraging the mining of tripal despite health risks</li>
                    <li></li>
                </ul>
                <h2>A bunch more evil shit she wants to do</h2>
                <hr class="solid">
                <ul>
                    <li>Is provoking the OBS to attack so she can gain more political power in the academy council because she is encouraging hightened security</li>
                    <li>Wants to develop liselos based weapons</li>
                    <li>Wants to invade Aegur in order to gain control complete control over liselos instead of relying on export</li>
                    <li>With the supply of liselos, she could give liselos weapons to an entire army, solidifying her power</li>
                    <li>Coup the academy council, take military control and lead the third ashirian expansion. </li>
                </ul>
            </div>
        <main>

        </main>
        <div class="button-wrapper">
            <a class="backbutton" href="people.php">Back to people</a>
            <a class="backbutton" href="../../lore.php">Back to lore</a>
        </div>

        <?php include('../../../footer.php')?>
    </div>
</body>

</html>