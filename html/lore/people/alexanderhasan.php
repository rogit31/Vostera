<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - People - Alexander Hasan</title>
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
            <li>Alexander Hasan</li>
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
                <h1>Alexander Hasan</h1>
                <p>Alexander Hasan was the leader of the Amelian Liberation Front. He is a tall and broad human man with slicked back blonde hair that curls into locks.</p>

                <h2 id="2">Backstory</h2>
                <hr class="solid">
                <p>Alexander Hasan was born in Serograd now <a href="#" class="crosslink">Elchester</a>, the capital of the former Amelian Kingdom. Born in an upper-class family he lived a comfortable life in the marble appartments that made Serograd famous accross Imar. The war began when Alexander was 11 years of Age. His father being part of the reserve, he died at the front. Alexander was a bright child with a talent for swords and leadership. As the war brewed and his father left to fight, he wanted to leave as well but because of his age was held back. Once the Amelian Kingdom fell and was annexed by the Ashir empire, Alexander saw the city he loved fall and suffer. Fires raged, devastating the once cultural and historical landmarks of the Amelian Kingdom. He swore to bring the Amelian Kingdom back from the ashes and to enact vengeance on the Ashir empire. 
                    With his talent for leadership and his family connections, establishing a rebel group was a quick task. Once he was old enough, he started to plot and prepare for an eventual coup. After getting in touch with some well versed scientists and wizards, he was able to draft a new type of weapon that could take down the Ashir presence in Imar.</p>
                <h2 id="3">Appearances</h2>
                <hr class="solid">
                <p>He died to a wand of create salt lmfao. Crushed by a gigantic block of salt.</p>
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