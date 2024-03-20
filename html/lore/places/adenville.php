<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - Places - Adenville</title>
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
            <li><a href="places.php">Places</a></li>
            <li>Adenville</li>
        </ul>
        <div class="sidenav article-tile">
            <ol>
                <li><a href="#1">Top</a></li>
                <li><a href="#2">Geography</a></li>
                <li><a href="#3">History</a></li>
                <li><a href="#4">Population</a></li>
                <li><a href="#5">Local Government</a></li>
                <li><a href="#6">Architecture</a></li>
                <li><a href="#7">Economy</a></li>
                <li><a href="#8">Culture</a></li>
                <?php if (isset($_SESSION['loggedin'])) : ?>
                <li><a href="#2"></a></li>
                <?php endif; ?>
            </ol>
        </div>
        <main>
        <div class="article-tile">
            <h1 id="1">Adenville</h1>
            <p>Welcome to Adenville, the jewel of the west coast and the fifth most populous city in the Ashir Empire. Nestled against the shores of the Mosilian ocean, this thriving metropolis is enveloped by the embrace of the Arian Woods, a thick forest of coniferous trees around the city.<p>

                <h2 id="2">Geography</h2>
                <hr class="solid">
                <p>Adenville's strategic location on the west coast makes it a bustling maritime hub, serving as the main trading post to the western lands. The Mosilian Sea provides not only a gateway for commerce but also a scenic backdrop for the city. To the east, the Arian Woods stand as a natural border, their ancient trees shrouding the city in a cloak of beauty and intrigue.</p>
                <h2 id="3">History</h2>
                <hr class="solid">
                <p>The legend says the planewalker herself founded this city centuries ago, and was her place of retirement. Since then the original house is still preserved and kept as a tourist attraction, though locals doubt to its authenticity. It is said she died of old age before being moved to the Sundown Monastery. Since then the city has steadily grown. 
                </p>
                <h2 id="4">Population</h2>
                <hr class="solid">
                <p>Adenville is composed mostly of humans, with a higher than usual population of elves and dwarves for the Ashir empire. The town also has a very significant amount of students, and has the second largest student body behind Avendor.</p>
                <h2 id="5">Local Government</h2>
                <hr class="solid">
                <p>The mayor is a half elven woman named Liren Voltsan. The local council is a relatively well balanced mix of merchants, woodworkers, professors, clergy, working class citizens and students. </p>
                <h2 id="6">Architecture</h2>
                <hr class="solid">
                <p>Adenville's architecture has an interesting mix of Ashirian, elven, and dwarven influences that combine into a an architecture that ends up intricate and maximalist in its design. The surrounding Arian woods provide for most of the construction material and as such all of the residential buildings are wooden, made of walnut and oak wood, giving buildings a dark color that many choose to keep in the original color and grain. This has given Adenville the nickname of the city of ash. The streets are paved, if a bit dirty at times. The inner circle of the city has the privilege and the money to afford to import stone from the slightly further stone fields of titanfall, and is constructed mostly with the signature ashened gray-ish almost volcanic looking rock. </p>
                <h2 id="7">Economy</h2>
                <hr class="solid">
                <p>As a major port city, Adenville's economy thrives on maritime trade, with ships arriving from distant lands laden with exotic goods. The bustling markets and merchant districts hum with activity as traders and artisans peddle their wares. The Arian Woods contribute valuable resources, including rare herbs and an abundant amount of durable walnut wood, which is extremely prised in the western lands for its dark beautiful color. </p>
                <h2 id="8">Culture</h2>
                <hr class="solid">
                <p>Adenville's cultural tapestry is woven with threads of imperial tradition and the influence of western dwarven and elven cultures.  The Academy stands as a testament to the city's commitment to magical arts, attracting wizards, scholars and students from far and wide. The city features a significant divide in between its main social classes, the blue collar workers (made mostly of woodworkers), the academics, and the merchants stand at odds to gain control over the local government. Despite this, the city has a unique unity due to its relative isolation to other cities and cultural diveristy that generally makes the city relatively peaceful and safe. </p>

 
        </div>
        </main>
        <div class="button-wrapper">
            <a class="backbutton" href="places.php">Back to places</a>
            <a class="backbutton" href="../../lore.php">Back to lore</a>
        </div>

        <?php include('../../../footer.php')?>
    </div>
</body>

</html>