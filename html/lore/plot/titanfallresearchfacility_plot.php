<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - Plot - Titanfall Research Facility</title>
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
            <li>Titanfall Research Facility</li>
        </ul>
        <div class="sidenav article-tile">
            <ol>
                <li><a href="#1">Top</a></li>
            </ol>
        </div>
        <div class="article-tile">
                <h1>Titanfall Research Facilities</h1>
                <p>The Titanfall Research Facilities are a group of hidden buildings located in the crater of <a href="../places/titanfall.php" class="crosslink">Titanfall</a> dedicated to the research of the titanfall crater, the crouching tripal titan, tripal dust and tripal itself. It also serves as a more general secret research facility for developing weapons of mass destructions far away from prying eyes.</p>

                <h2 id="2">Approaching the TRF</h2>
                <hr class="solid">
                <p>The TRF relies on stealth, illusion, and <a href="drain_condition.php" class="crosslink">the drain</a> to dissuade intruders, spies, and other potential tangos from coming close to the titanfall crater. Upon detecting the illusion that covers the crater, the players can opt into getting closer to the center of the crater.</p>

                <h3>Description</h3>
                <p>The PCs see the following:</p>
                <ul>
                    <li>A strong purple haze fills the air around you. The air is difficult to breathe, warm and heavy. A feeling of intense pressure and static sticks to your skin, making you feel uneasy. </li>
                    <li>the center of the crater is covered by a gigantic sand-colored tarp.</li>
                    <li>There are four watchtowers about three thousand feet from the edge of the tarp, equally spaced from each other.</li>
                    <li>The crater itself is covered in a thick layer of purple chalky dust that sticks to your clothes and shoes as you walk.</li>
                    <li>Near the tarp, with a perception 15+, you notice the entrance to a tunnel. Some people seem to be entering and leaving from this tunnel.</li>
                    <li>All the personal here is wearing some kind of protective clothing as well as a mask that oddly resembles the mask of arcane breathing that you've seen before.</li>
                </ul>
                <h3>The watchtowers</h3>
                <h4>Bottom floor</h4>
                <p>The watchtowers are wooden structures of about 50 feet tall and 20 feet by side. There is one unlocked wooden door on the face facing towards the tarp on each of the towers. The bottom of the tower is the resting area, that has a table in the middle, some barrels of water on the right side. The inside is candle lit. As you enter, towards the left furthest corner, a staircase begins and leads upwards. Underneath the stairs, a door that leads to a dug toilet. On the left wall, is pinned the watchtower schedule, some wanted posters, including CA, Lucius Aemon, Dareej, Elwyn Mardan. Some half finished food sits on the table.</p>
                <p>The bottom floor has 1d4 <a href="../statblocks/imperialguard.php" class="crosslink">Imperial Guards</a>.</p>
                <h4>Top floor</h4>
                <ul>
                <li>The staircase is five feet wide, goes up ten feet, turns right, goes up ten feet again and opens up to the top floor of the tower.</li>
                <li>The top of the tower is covered. It is twenty by twenty, has pillars on each corner. There is a calling horn on one of the sides of the tower. There's also a spotlight fueled by a liselos lamp searching rotating around the premises.</li>
                <li>There is a <a href="http://dnd5e.wikidot.com/siege-equipment:ballista" class="crosslink" target="_blank">ballista</a> mounted on the wall towards the outside.</li>
                </ul>
                <h3>The tarp</h3>
                <ul>
                <li>Under the tarp sits a scaffolding that surrounds a shining rock hard purple structure. This structure clearly resembles tripal. Upon closer inspection the structure looks similar to the depictions of titans you have seen before. except the bottom is still buried and it seems like the top is missing.</li>
                <li>The tarp is guarded by 4 <a href="../statblocks/peacekeeper_statblock.php" class="crosslink">peacekeepers</a> in protective gear constantly roaming around it. </li>
            </ul>
            <h2>Research Facility</h2>
            <hr class="solid">
            <img class="statblock" src="../../../media/titanfallresearchfacilityimage_97x69.png" alt="map of the research facility">
            <h3>Timetables</h3>
            <p>Each tower shift swaps at different times, every eight hours. The shifts are staggered every two hours by tower. Meals are served all day round. </p>
            <h3>Entrance</h3>
            <ul>
                <li>The entrance is not guarded but on a 1/6, there are two <a href="../statblocks/peacekeeper_statblock.php" class="crosslink">peacekeepers</a> walking out/in of the facility.</li>
            </ul>
            <h3>Decontamination room</h3>
            <ul>
                <li>The room is filled with what seems like filled baths with clean water. There are instructions on how to clean the protective equipment that the players see. It asks of staff to dispose of the suits, dunk them in water and put them under a trap in the corner of the room.</li>
                <li>The door out of the decontamination room and to the vestiare is magically activated, and blasts air from below and above. </li>
                <li>The decontamination room has two guards changing out of their suits and getting nakey, talking about what food there is at the canteen tonight. </li>
            </ul>
            <h3>Vestiaire</h3>
            <ul>
                <li>The room is lined with benches, shelves, and cabinets filled with common clothes. </li>
                <li>Depending on the time of the day, the vestiaire could have many or no staff. </li>
            </ul>
            <h2>Vixal Blund</h2>
            <hr class="solid">
            <p><a href="../people/vixalblund.php" class="crosslink">Vixal Blund </a>is the superintending officer of the academy responsible for the oversight of the research facility. He is reporting to general and senator <a href="../people/vesperaargent.php" class="croslink">Argent</a> throughout the affair. To do so he uses an enchanted mirror situated in one of the offices.</p>
            <h2>Leia Rosenthorne</h2>
            <p>Leia is alive and healthy, but is being held here against her will with a threat hanging above the Underbelly's existence. With this in mind she is doing research collaborating with a few other people working on <ul>
                <li>The history and study of the titanfall accident</li>
                <li>The study of aether and the aetheric weave</li>
                <li>The development of tripal based technology</li>
                <li>The development of aether based weapons</li>
            </ul></p>
            <h3>Notes on research</h3>
            <p>The notes to this research can be found in the lab, inside of a locked cabinet of a desk with Leia's name on it or in the offices, overheard by the players while Vixal is communicating or on papers on the desk.</p>
            <ul>
                <li>Sample studies show that the explosion that occurred here most likely occurred about 50 thousand years ago. They also show that while the material that was flinged around and into orbit was mostly tripal, the energy itself could not have been from only tripal and suggests that other sources of power were probably combined to make a crater of this size.</li>
                <li>Notes suggests that it was a gigantic civilization ending explosion with the epicenter being a titan made of tripal. Further research is needed in order to understand the exact motus operandi of what happened at Titanfall and that reproducing such an event would require additional knowledge and tools.</li>
                <li>She speculates that all tripal is in fact a part of this titan.</li>
                <li>She notes that the aid of the books of genesis could likely make the creation of a second event possible, if unlikely, and would be most likely required if to be reproduced in the next 200 years.</li> 
            </ul>
            <hr class="solid">
            <ul>
                <li>Diagrams and studies show that the aetheric weave here is perturbed, and is most likely warping towards the titan. </li>
                <li>She speculates that tripal dust is conducting aetheric energy and warping the weave to redirect towards the titan and is corrupting living matter.</li>
                <li>She notes that the use of magic here is destabilized as a result of an unstable and dangerous aetheric weave.</li>
            </ul>
            <hr class="solid">
            <ul>
                <li>She notes that tripal could be used with the intent of traps, or mines, channeling aether from a distance. </li>
                <li>Could be used to stabilize aetheric weapons by giving them an exhaust. </li>
                <li></li>
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