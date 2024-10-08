<!doctype html>
<html lang="en">

<head>
    <title>Vostera - Player Characters</title>
    <?php
    include __DIR__ . '/../components/head.php' ?>
</head>

<body>
<div id="wrapper">
    <?php include __DIR__ . '/../components/header.php' ?>
    <main>
        <?php include_once __DIR__ . '/../components/sideBar.php';
        include_once __DIR__ . '/../components/sideBarMobileButton.php'; ?>
        <h1>Player Characters</h1>
        <nav>
            <ul class="tile-nav">

                <li class="category-tile">
                    <a href="https://www.dndbeyond.com/characters/93464408/AcHkYh" target="_blank">
                        <h3>Hemlock</h3>
                        <div>
                            <img class="pc-image" src="/media/images/hemlock.png" alt="drawing of a green dragonborn">
                        </div>
                        <p>A green dragonborn rogue with a military history, arson related PTSD and a penchant for shiny
                            things...</p>

                    </a>
                </li>

                <li class="category-tile">
                    <a href="https://www.dndbeyond.com/sheet-pdfs/Gooei_112446750.pdf" target="_blank">
                        <h3>Meg</h3>
                        <div>
                            <img class="pc-image" src="/media/images/meg.png" alt="drawing of a bird-person bard">
                            <p>An aarakocra bard with a kind heart, motivated to make coin by any means possible. </p>
                        </div>
                    </a>
                </li>
                <li class="category-tile">
                    <a href="https://www.dndbeyond.com/sheet-pdfs/Gooei_124590375.pdf" target="_blank">
                        <h3>Sylril Ravi</h3>
                        <div>
                            <img class="pc-image" src="/media/images/sylril.jpeg"
                                 alt="illustration of a paladin wielding a flaming sword">
                            <p>A pyromaniac half-elf with wavering allegiances.</p>
                        </div>
                    </a>
                </li>

                <li class="category-tile">
                    <a href="#">
                        <h3>Bor</h3>
                        <div>
                            <img class="pc-image"
                                 src="https://i.pinimg.com/564x/61/c7/a4/61c7a4c96b677f718ec058585b8d6217.jpg"
                                 alt="illustration of a dwarf">
                            <p>A dwarf druid in charge at the Eloran mines, a mine exporting silver to Kimbar and the
                                rest of the Ashir empire.</p>
                        </div>
                    </a>
                </li>
            </ul>
        </nav>
    </main>

</div>
</body>

</html>