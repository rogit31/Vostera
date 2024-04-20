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
                    <li>Meg's brother and Jone's daughter come back to Tephia</li>
                    <li>What happens with Raoul and Elwyn atp, what are their character arcs like?</li>
                    <li>What is Vespera's plan atp, after taking Khava hostage and shutting down the underbelly?</li>
                    <li>Maybe another speech/message/news about a successful sting</li>
                    <li>Need to keep the stakes with the OBS/vespera high, what is the OBS up to, they promised Lucina an entrance into the OBS and some explanations in exchange for information about the books of genesis.</li>
                    <li>Maybe give a timeline so the pressure becomes higher</li>
                    <li>Maybe Vespera contacts meg, proposes a deal where she extends her life/her brother's in exchange for some information or their allegiance?</li>
                    <li>Hemlock's mom too wtf is up with that</li>
                    <li>The gods fucking HATE the obs, because tripal nuke-> no aether -> no gods (or no people -> no gods).</li>
                    <li>OBS is going to wait for the start of the war to mount an attack on Sola's church and TP tomb. </li>
                    <li>Could go to aegur island to get tome of genesis + talk to the last dragonrider</li>
                </ul>
                <h2>To-prep:</h2>
                <hr class="solid">
                <ul>
                    <li>Lucina meets the OBS</li>
                    <li>Message from Elwyn</li>
                    <li>OBS hideout</li>
                    <li>Message from Vespera maybe?</li>
                    <li>Update character sheet for Vespera</li>
                </ul>
                <h2>Session scenes:</h2>
                <hr class="solid">
                <h3>Lucina arriving at the OBS</h3>
                <ul>
                    <li>Lucius talks to Lucina and gives her the rundown of what happened since then</li>
                    <li>After she was freed, he stayed behind</li>
                    <li>At first he couldn't remember what happened and went through school in a haze</li>
                    <li>They modified his memory to make old classmates and everyone who knew Lucina to think she was a traitor</li>
                    <li>Spent every night at a tavern</li>
                    <li>Approached by an order shadow</li>
                    <li>Given memory back by Sun Zeke</li>
                    <li>Enrolled into the obs</li>
                    <li>Been working as double agent since</li>
                    <li>Gives rundown of the order's objectives</li>
                    <li>We want to create a world where this type of thing doesn't happen anymore. Where those in power can no longer abuse the weave to control the masses. A utopia where people don't need to live in fear of their children being stolen, of their memory changed, of rogue incediary mages. We want to level the playing field.</li>
                    <li>He gives her a choice. To know more she must be marked by the black sun and take an oath to serve the black sun. This will find her and activate under Inktorch light.</li>
                    <li>"I, [Name], vow my allegiance to the Order of the Black Sun, its values, its goals, its god and to serve its cause with unwavering loyalty and dedication. I pledge to embrace the darkness within and the light without. I pledge my body, spirit, and mind to the third genesis. I swear to follow the Order's light without question or hesitation under punishment of death. May the darkness guide me and the ink burn my path until the Phoenix rises under a black sun."</li>
                    <li>Lucina arrives at the OBS hideout</li>
                    <li>Guy gets disintegrated</li>
                    <li>Worship scene</li>
                    <li>Lucina is accepted into this Apogee council for exceptional contribution.</li>
                    <li>Main talking points:</li>
                    <li>Numbers grow</li>
                    <li>New guest, Shadow Lucina who has helped us uncover the locations of the remaining books of genesis</li>
                    <li>Progress on the third genesis cradle remains similar. We still must acquire the two remaining books of genesis and after aquisition we estimate another month or so of work thanks to Light calisto's work.</li>
                    <li>In order to aquire the two remainings books, we shall be sending light mavel and light dareej with teams of their choice to the aegurian wildlands. May the darkness guide them.</li>
                    <li>As to the last book of genesis, we shall wait for further political instability and the start of the Aegurian war. Our whispers seem to agree this will begin within two months of now, after the parliamentary elections next month. </li>
                    <li>We need to garner more members and popular support on the inside of the academy in order for the take over the sundown monastery and the last tome.</li>
                </ul>
                <h3>Vespera follows Raoul Ragimund</h3>
                <ul>
                    <li>Some kind of election in a month or so</li>
                    <li>So far, she is still a bit behind on the Hudals in support</li>
                    <li>She thinks she needs one more terrorist attack/disruption to secure the win</li>
                    <li>But the hudals are on high alert and she needs someone who is desperate, discrete, but capable</li>
                    <li>CO fit the bill perfectly</li>
                    <li>But she doesn't want the OBS to get it because she started fearing that they would actually be a problem</li>
                    <li>She proposes a trade, where the CO would steal the tome of genesis and the tomb of the planewalker. They give it back to her and they will be pardonned under her rule. If they decide not to, she will find them and kill them. </li>
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