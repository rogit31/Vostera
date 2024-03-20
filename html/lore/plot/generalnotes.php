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
                <h2 id="2">Potential Scenes</h2>
                <hr class="solid">
                <ul>
                    <li>Hemlock sees more visions from Vero</li>
                    <li>Lucina nightmare?</li>
                    <li>Hemlock's mom is alive?</li>
                    <li>OBS wants to find information on tomes of genesis</li>
                    <li>New letter from meg's brother</li>
                    <li>Plan in more detail Raoul's character overall as well as his reaction. Why is he at the underbelly waiting for them? Why did his eyes turn green? What exactly did both of them cooperate on? -- The tripal stone to be delivered to the ALF was their original mission, encouraging attacks on the empire to stabilize Argent's position in the council. There's a reason we gave up chase easily. Unfortunately I was not there to oversee the rest of the exchange...</li>
                    <li>She requires Khava, so she will for sure take her alive - Khava would've tried to take her own life-.</li>
                    <li>The other members are either killed or taken. Those who resisted where disintegrated.</li>
                    <li>Raoul gives them a lecture on the power balance they upset by challenging Vespera</li>
                    <li>"Since you have bit the lion's tail, show me you can take it down. Or suffer the vengeance you so deserve."</li>
                    <li>They either convince him to stand down or fight him</li>
                    <li>After which if they lose, he tells them to get stronger and get back to him when they can defeat him.</li>
                    <li>If they do beat him, he gives up and agrees to help them under the condition that they: free the prisoners and do right by them, stop war to aegur, and potentially negotiate empirical pardon. </li>
                    <li>If they agree, he gives them the information that they want.</li>
                    <li>Raoul would know of: Vespera's plans to destabalize Ashirian politics to stage a coup, to wage war on Aegur</li>
                    <li>He also has an informant that found out the spot of the book one of the books of genesis</li>
                    <li>He doesn't know what this book is, but vespera seemed very keen on finding the next one</li>
                    <li>There are nine books total, three of them relate to war. One of them was stolen by the OBS during the attacks on Avendor. So there are two books remaining, one of them is held in the tomb of the planewalker by the solists. - Vespera can't get access to it yet, this is why she needs a coup, on top of getting more control over the military. The third is held by the last dragonrider, who is in the Aegurian Wildlands.</li>
                 
                </ul>
                <h2>Next steps</h2>
                <hr class="solid">
                <ul>
                    <li>Figure out how Zeke and Vespera relate to The books of genesis and Nora</li>
                </ul>
            </div>
        </main>
        <div class="button-wrapper">
            <a class="backbutton" href="plot.php">Back to plot</a>
            <a class="backbutton" href="../../lore.php">Back to lore</a>
        </div>

        <?php include('../../../footer.php')?>
    </div>
</body>

</html>