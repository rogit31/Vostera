<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - People - Raoul Ragimund</title>
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
            <li>Raoul Ragimund</li>
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
                <h1>Raoul Ragimund</h1>
                <p>Raoul Ragimund is the head of the underbelly and was previously described with having green eyes. He is a bald human man that talks with a nondescript eastern european accent.</p>
                <?php if (isset($_SESSION['loggedin'])) : ?>
                <h2 id="2">Goals</h2>
                <hr class="solid">
                <p>Raoul wishes more than anything to protect the family he's built around him at the underbelly. He believes he gave societal rejects or empirical hooligans a safe place to explore the world, become de facto archeologists and thieves, which in his eyes is much better than an addict, a beggar, or a puppet for the empire.</p>

                <h2>The goal he negotiated with Vespera</h2>
                <hr class="solid">
                <p>Vespera was the first of the empire's agents to find the soft spot. She made it clear that she would only hold back on destroying the soft spot and killing the members of the underbelly under the condition that Raoul would lead the underbelly in whatever mission she saw fit. Their first task was to steal a tripal shard from the Avendor academy. Amun Boleslav being the best available option at the time, he was tasked with this mission. He managed to steal the tripal shard, but got caught in the process, resulting in him confiding the shard to his goblinoid connections. The shard was then stolen back, stolen again, brought back to the underbelly. Vespera's instructions were clear, sell the shard to the ALF.</p>
                <p>Raoul was mad and angry when he realized that the Underbelly would come to an end because of the actions of CO's. Almost all members were arrested, with Khava being held hostage. He burned down the Soft Spot, and now decided to help CO's by bringing back Magnus to Tephia as well as Jones' daughter. What part will he play after this?</p>
            </div>
            <?php endif; ?>
        </main>
        <div class="button-wrapper">
            <a class="backbutton" href="people.php">Back to people</a>
            <a class="backbutton" href="../../lore.php">Back to lore</a>
        </div>

        <?php include('../../../footer.php')?>
    </div>
</body>

</html>
