<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - Plot - General Notes</title>
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
            <li>General Notes</li>
        </ul>
        <div class="sidenav article-tile">
            <ol>
                <li><a href="#1">Top</a></li>
            </ol>
        </div>
        <main>
            <div class="article-tile">
                <h1>General Notes</h1>
                <h2 id="2">To-think-of:</h2>
                <hr class="solid">
                <ul>
                    <li>Describe in detail how Hemlock interacts with Vero's madness</li>
                    <li>What even is Vero's madness exactly?</li>
                    <li>How will Vero's truthseekers react/help</li>
                    <li>Meg's brother and Jone's daughter come back to Tephia</li>
                    <li>What happens with Raoul and Elwyn atp, what are their character arcs like?</li>
                    <li>What is Vespera's plan atp, after taking Khava hostage and shutting down the underbelly?</li>
                    <li>Maybe another speech/message/news about a successful sting</li>
                    <li>Need to keep the stakes with the OBS/vespera high, what is the OBS up to, they promised Lucina an entrance into the OBS and some explanations in exchange for information about the books of genesis.</li>

                </ul>
                <h2>To-prep:</h2>
                <hr class="solid">
                <ul>
                    <li>Description of Hemlock/Vero interaction</li>
                    <li>All of Onarx</li>
                    <li>Vero's church and cult in Onarx</li>
                    <li>The truthseekers</li>
                    <li>Message from Lucius</li>
                    <li>Message from Elwyn</li>
                    <li>Message from Vespera maybe?</li>
                    <li>Update character sheet for Vespera</li>
                    <li>Some kind of challenge/sacrifice for Hemlock to overcome in order to regain his wisdom</li>
                </ul>
            </div>
        </main>
        <div class="button-wrapper">
            <a class="backbutton" href="plot.php">Back to plot</a>
            <a class="backbutton" href="../../lore.php">Back to lore</a>
        </div>

        <?php include('../../../footer.php') ?>
    </div>
</body>

</html>