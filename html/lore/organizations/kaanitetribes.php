<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - Organizations - Kaanite Tribes</title>
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
            <li>Kaanite Tribes</li>
        </ul>
        <div class="sidenav article-tile">
            <ol>
                <li><a href="#1">Top</a></li>
                <?php if (isset($_SESSION['loggedin'])) : ?>
                <li><a href="#2">Culture</a></li>
                <li><a href="#3">Lifestyle</a></li>
                <li><a href="#4">Nomads</a></li>
                <li><a href="#5">Trade</a></li>
                <li><a href="#6">Beliefs</a></li>
                <li><a href="#7">Challenges</a></li>
                <?php endif; ?>
                <li><a href="#8">Fall</a></li>


            </ol>
        </div>
        <main>
            <div class="article-tile">
                <h1>Kaanite Tribes</h1>
                <p>The Kaanite tribes were a mountainous tribe of people that lived in the Kaan mountain chain of Eloran.</p>

                <?php if (isset($_SESSION['loggedin'])) : ?>
                <h2 id="#2">Culture and Lifestyle</h2>
                <hr class="solid">
                <p>The indigenous people who called the alpine tundra of the Kaan Mountains home were known as the Kaan Mountain Tribes. They had a deep connection to the rugged, high-altitude environment that shaped their way of life for generations. Their culture revolved around survival in the challenging alpine terrain.</p>

                <h2 id="#3">Hunting and Gathering</h2>
                <hr class="solid">
                <p>These tribes were skilled hunters and gatherers. They relied on the alpine meadows for seasonal foraging, collecting a variety of edible plants, berries, and roots. Their diet also included the meat of mountain goats, ibexes, and other hardy animals that roamed the highlands. The tribes used a combination of traps, spears, and their knowledge of the land to procure sustenance.</p>

                <h2 id="#4">Nomadic Lifestyle</h2>
                <hr class="solid">
                <p>The Kaan Mountain Tribes were semi-nomadic, following the seasonal availability of resources. They established temporary settlements in well-protected areas during the warmer months and migrated to lower elevations in winter to avoid the harshest cold and snow. Their portable dwellings, often made of hides and wood, were designed for mobility.</p>

                <h2 id="#5">Trade and Exchange</h2>
                <hr class="solid">
                <p>These tribes had a network of trade and exchange with lowland communities. They traded furs, herbs, and rare alpine resources in exchange for items they could not produce in the highlands, such as metal tools and textiles.</p>

                <h2 id="#6">Shamanistic Beliefs</h2>
                <hr class="solid">
                <p>The Kaan Mountain Tribes had a deep spiritual connection to the alpine landscape. They revered the spirits of the mountains and natural elements. Shamans played a significant role in their society, conducting rituals to appease the spirits and seek guidance for the tribe.</p>

                <h2 id="#7">Challenges of the Tundra</h2>
                <hr class="solid">
                <p>Life in the alpine tundra was harsh. Harsh winters, limited vegetation, and unpredictable weather patterns made survival challenging. The tribes adapted to these conditions, using their knowledge of the environment and resourcefulness to thrive.</p>
                <?php endif; ?>

                <h2 id="#8">Fall of the tribes</h2>
                <hr class="solid">
                <p>They got rekd because different gods lel.</p>
            </div>


        </main>
        <div class="button-wrapper">
            <a class="backbutton" href="organizations.php">Back to organizations</a>
            <a class="backbutton" href="../../lore.php">Back to lore</a>
        </div>

        <?php include('../../../footer.php')?>
    </div>
</body>

</html>