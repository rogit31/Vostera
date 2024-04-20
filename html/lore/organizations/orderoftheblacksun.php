<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - Organizations - Order of the Black Sun</title>
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
            <li>Order of the Black Sun</li>
        </ul>
        <div class="sidenav article-tile">
            <ol>
                <li><a href="#1">Top</a></li>
                <?php if (isset($_SESSION['loggedin'])) : ?>
                    <li><a href="#2">Ideology</a></li>
                    <li><a href="#3">Leadership</a></li>
                    <li><a href="#4">History</a></li>
                    <li><a href="#5">Objectives</a></li>
                    <li><a href="#6">Recruitment</a></li>
                    <li><a href="#7">Alliances and Networks</a></li>
                    <li><a href="#8">Counter-terrorism Responses</a></li>
                    <li><a href="#9">Symbols</a></li>
                    <li><a href="#10">Public Perception</a></li>
                    <li><a href="#11">Next Steps</a></li>
                <?php endif; ?>
            </ol>
        </div>
        <main>
            <div class="article-tile">
                <h1>Order of the Black Sun</h1>
                <p>The order of the black sun is a terrorist organization that recruits derelict spellweavers. They have commited several terrorist attacks against the <a href="ashirempire.php" class="crosslink">Ashir Empire</a> and more specifically the <a href="academyarcanum.php" class="crosslink">Academy Arcanum</a>. <a href="../people/leucisaemon.php" class="crosslink">Lucius Aemon</a> <a href="../people/dareej.php" class="crosslink">Dareej</a> are known members of the order.</p>

                <?php if (isset($_SESSION['loggedin'])) : ?>
                    <h2 id="2">Ideology</h2>
                    <hr class="solid">
                    <p>The OBS' ideology is one of restarting the world. They believe the aetheric re-emergence is a blight upon this world and in order to avoid the disasters of the titanic era, it is best to cleanse the world of it's aether and start anew. Their objective is to rebuild the aether bomb of Aylin Ashir and remove the existence of spellweavers from Vostera. Secretely, only a few members know but there never was a a way to build an aether-only bomb. In fact, the reason why aether exists is because life requires it to exist. In order for aether to be cleansed, this would require the complete destruction of all living life.</p>
                    <p>They have this kind of martyr-like attitude about this, as if they were the only option available to this problem. They see themselves as the only solution to this tragic problem. They believe the cause of the Aetheric re-emergence was the survival of Aylin Ashir.</p>

                    <h2 id="3">Leadership</h2>
                    <hr class="solid">
                    <h3>Roles</h3>
                    <p>There are different roles and categories of members with varying levels of power in the OBS:</p>
                    <ul>
                        <li>Founder/Sun</li>
                        <li>Council Elder/Moon</li>
                        <li>Light</li>
                        <li>Shadow</li>
                        <li>Whisper</li>
                    </ul>
                    <h3>Sun</h3>
                    <p>The sun is the founding role of the OBS. Has always been held by Zeke Ashir. The sun has authoritative power over the whole organization and ultimately has the final say on any decisions made by the Apogee council.</p>
                    <p>A direct descendant of Aylin Ashir. A secretely survived child from <a href="../history/pheonixgate.php" class="crosslink">Pheonixgate</a>. He realizes that the fight for power and aether is never ending and the only way to end it is to finish what Aylin started.</p>

                    <h3>Moon</h3>
                    <p>Moons are elder members of the OBS and make the apogee council. Every full moon, the members of the council meet with the sun with the lights as attendees to recap on the months events, spread information, decide on next steps and plan out actions to take.</p>
                    <p>There is a limited amount of moons in the OBS at all times, limited to eleven.</p>
                    <h3>Lights</h3>
                    <p>Lights are trusted operatives of the OBS and are trusted enough to be able to attend and participate in Apogee council meetings, though they cannot vote. Lights can carry many different functional roles, including the following:</p>
                    <ul>
                        <li>Propagandist</li>
                        <li>Operative</li>
                        <li>Sabotage</li>
                        <li>Infiltrator</li>
                    </ul>

                    <h4>Propagandist</h4>
                    <p>Head of propaganda is Capri is a shapeshifter woman, very charismatic and ex academy.</p>
                    <h4>Operative</h4>
                    <p>Dareej is one of them. Head of operations is Pax, human man with a scar over his right eyebrow, long brown hair, quiet in conversation. Mavel is another, goliath man with a friendly smile and tattoos covering his entire body. The players recognize him as one of the people detained in the avendor cellar.</p>
                    <h4>Sabotage</h4>
                    <p>Head is Calisto. Elven woman with a background in aetherology. </p>
                    <h4>Infiltrator</h4>
                    <p>Head is Lucius Aemon, as well as Zander, a half-elven man with a prosthetic arm. </p>

                    <h3>Shadow</h3>
                    <p>Shadows are member of the OBS who are still new to the organization and have yet to become trusted members. They are often given the most gruelling or menial tasks by lights, including gathering or spreading rumors, recruitment, writing or copying propaganda, gathering resources and so on. To become a shadow, whispers must undergo rigorous mental and physical training and make a pact with the Sun. The pact's condition is that if you are captured and someone peers into your mind and successfully penetrates the mental fortress that you have been given, you sacrifice your soul and body to the black sun. They attend the apogee councils but from a distance and are not allowed to participate.</p>

                    <h3>Whisper</h3>
                    <p>Whispers are new recruits to the OBS. They have yet to prove their use in any way to the order, and are trusted with very little. They are not summoned to apogee councils. To become a whisper, one must vow allegiance to the Order and be marked with the black sun's emblem.</p>


                    <h2 id="#4">History</h2>
                    <hr class="solid">
                    <p>The ashirian secret, the original sin is at the origin of the creation of the Order. The survival of Aylin and Nola Ashir was the reason for the regeneration of the weave. The Hudal family used this information to win a case against the Ashirs and dethroned them, putting the blame on the Ashirs for the creation of the academy, the regeneration of the weave and the preferential treatment of spellweavers. The Hudals promised a change from the Ashirian administration, which to some extent did happen. Their politics were focused around the relaxing of academy control, the slow of the ashirian expansion and a focus on internal affairs. The Hudals see the aetheric re-emergence as a dangerous myth from the past that the Ashirs used to abuse their power. They are seen as more modern and progressive, but some see their policies as soft and forgiving. Vespera Argent is the modern more conservative equivalent, that bases her popularity on the idea of the rebuilding of the Ashirian expansion. Zeke Ashir is an illegitimate child of the Ashirs that survived the culling of the Ashir family centuries ago during their trial. He knows about the Ashirian secret and created the OBS as a way to deal with the aetheric re-emergence. He wants to recreate the original explosion Aylin Ashir caused, but without having any survivors, to fully erase the weave and hopefully restart the world without magic. Openly though, he says the re-emergence can be stopped with a strict anti-aether bomb.</p>

                    <h2 id="#5">Objectives</h2>
                    <hr class="solid">
                    <p>The primary goal of the order is to create an equal world, where the weave and those who use it don't hold power over those who cannot use it. The core beliefs of the unequality of the weave are:</p>
                    <ul>
                        <li>The weave is unequally distributed</li>
                        <li>Weave manipulation is taught to the privileged and rich</li>
                        <li>The weave is used to undermine those who cannot use it</li>
                        <li>It is a heavily guarded secret (i.e. the privileged are hogging the power of the weave)</li>
                        <li>Even when it does serve the under-privileged, it is for a price.</li>
                    </ul>
                    <p>The OBS believes that most of the horrors of this world; war, famine, disease, could all be helped by the democratization of the weave. But the ruling class refuses to share it, they hog it, police it, control it. There are two solutions to this problem: force the ruling class to democratize the weave, or erase the weave entirely. Thus the main objective of the order is to erase the weave in order to create an equal world, what they call third genesis.</p>
                    <h2 id="#6">Recruitment</h2>
                    <hr class="solid">
                    <p>The order guerilla recruits from the streets when it comes to shadows and whispers, garnering public support from anti-academy sentiments. More qualified members, lights and moons are usually picked for specific objectives. For example, <a href="../people/leucisaemon.php" class="crosslink">Lucius</a> was picked because of his disfigurement that was spotted by a shadow, shadow Erin. She was a half-elven woman who had a similar story and slowly reeled him into the order before he was eventually contacted by sun Zeke. Shadows and other new recruits need to be marked by the black sun before being recruited. The mark of the black sun is generally imprinted onto the back of members, and is invisible usually, but is visible under the light of a specific spell, the Inktorch spell. </p>
                    <h2 id="#7">Alliances and networks </h2>
                    <hr class="solid">
                    <p></p>
                    <h2 id="#8">Counter-terrorism</h2>
                    <hr class="solid">
                    <p></p>
                    <h2 id="#9">Symbols</h2>
                    <hr class="solid">
                    <p></p>
                    <h2 id="#10">Public perception</h2>
                    <hr class="solid">
                    <p></p>
                    <h2 id="#11">Next steps</h2>
                    <hr class="solid">
                    <ul>
                        <li>Find the location of the next tomes, most likely through espionage or inflitration, they could try to get ca to prove themselves through this</li>
                        <li>Hi meg! I haven't written to you in a while, I'ts been busy... I have been working for this new lady in the clarit Hills! I like it... Their house is super big and shiny! Their kids are kind of mean but I don't mind it too much. I have my own room now! And I filled it with drawings and some plants. My new boss, Nolwen Argent is a bit strict though and even though I wanted to adopt a kitten she didn't let me. But that's ok, with some of the money you sent me I'm hoping to go to school someday! I even managed to talk to some of the people at the academy here and they think I might have a chance! Especially if I get on miss Argent's good side she told me she could help me with getting in! Let me know how you're doing, and where you're at right now, I hope you'll be able to experience the beautiful weather in Avendor sometime. Miss you Meg.
                            -Magnius
                        </li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <p>The OBS needs to know:
                    <ol>
                        <li>The existence of an aether bomb and thus the true origin of the world and genesis</li>
                        <li>The existence of the books of genesis and possibly their general location</li>
                        <li>Because they know about the lie of the genesis, they most likely believe in the gods but do not believe in their creation. "The gods didn't create us, we created them. It is undebatable that they give us incredible boons of divine power but their origin is as false as the academy's lies."</li>
                        <li>There are nine books of genesis, the last three of which that are required to build an aether bomb. The order already has one of the books thanks to their attack on Avendor, that happened thanks to their jailbreak getting so much attention. They were given fake information about the second book being in Adenville. They think the second book could be in the planewalker's grave in the sundown monastery. The third's books whereabouts are unknown. The academy purposefully has the books locations split up amongst different secure locations to reduce the chances of anyone getting all of them. They are contained in closed boxes that are immune to divination. They promise to give CO answers and knowledge about the world if they complete a certain task? Probably related to titanfall so they can discover more about that. </li>
                        <li></li>
                        <li></li>
                    </ol>
                    </p>
                <?php endif; ?>
            </div>


        </main>
        <div class="button-wrapper">
            <a class="backbutton" href="organizations.php">Back to organizations</a>
            <a class="backbutton" href="../../lore.php">Back to lore</a>
        </div>
        <?php include('../../../footer.php') ?>
    </div>
</body>

</html>