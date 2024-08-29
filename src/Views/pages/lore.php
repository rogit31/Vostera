<!doctype html>
<html lang="en">

<head>
    <title>Vostera - Lore</title>
    <?php include __DIR__ . '/../components/head.php'; ?>
</head>

<body>
<div id="wrapper">
    <?php include __DIR__ . '/../components/header.php' ?>
    <main>
        <?php include_once __DIR__ . '/../components/sideBar.php';
        include_once __DIR__ . '/../components/sideBarMobileButton.php'; ?>
        <h1>VOSTERA'S LORE</h1>

        <nav>
            <ul class="tile-nav">

                <li class="category-tile">
                    <a href="lore/history">
                        <h3>HISTORY</h3>
                        <img src="/media/images/pheonixlogo.svg" class="tile-logo" alt="logo of a phoenix">
                    </a>
                </li>
                <li class="category-tile">
                    <a href="lore/places">
                        <h3>PLACES</h3>
                        <img src="/media/images/geographylogo.svg" class="tile-logo" alt="logo of a globe">
                    </a>
                </li>
                <li class="category-tile">
                    <a href="lore/people">
                        <h3>PEOPLE</h3>
                        <img src="/media/images/crownlogo.svg" class="tile-logo" alt="logo of a crown">
                    </a>
                </li>
                <li class="category-tile">
                    <a href="lore/items">
                        <h3>ITEMS</h3>
                        <img src="/media/images/swordlogo.svg" class="tile-logo" alt="logo of a sword">
                    </a>
                </li>
                <li class="category-tile">
                    <a href="lore/gods">
                        <h3>GODS</h3>
                        <img src="/media/images/prayinglogo.svg" class="tile-logo" alt="logo of praying hands">
                    </a>
                </li>
                <li class="category-tile">
                    <a href="lore/organizations">
                        <h3>ORGANIZATIONS</h3>
                        <img src="/media/images/academylogo.svg" class="tile-logo" alt="logo of three trees">
                    </a>
                </li>
                <li class="category-tile">
                    <a href="lore/plot">
                        <h3>PLOT</h3>
                        <img src="/media/images/flowerlogo.svg" class="tile-logo" alt="logo of a flower">
                    </a>
                </li>
                <li class="category-tile">
                    <a href="lore/statblocks">
                        <h3>STATBLOCKS</h3>
                        <div>
                            <img src="/media/images/turtlelogo.svg" class="tile-logo" alt="logo of a turtle">
                        </div>
                    </a>
                </li>
                <li class="category-tile">
                    <a href="lore/meta">
                        <h3>META & MISC</h3>
                        <img src="/media/images/hourglasslogo.svg" class="tile-logo" alt="logo of an hourglass">
                    </a>
                </li>
            </ul>
        </nav>

        <h3>All articles:</h3>
        <nav>
            <div class="allArticles">
                <?php
                foreach ($articles as $key => $article) {
                    echo "
    <div class='resultCard'>
        <a href=\"/read-article/" . $article['slug'] . "\">" . $article['title'] . "</a>";
                    if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == $article['author_id']) {
                        echo "
        <span>
            <form action='/edit-article/" . $article['slug'] . "' method='post'>
                <button type='submit'><img class='articleCardIcon' src='/media/images/editIcon.svg' alt='Edit'></button>
            </form>
            <form action='/delete-article/" . $article['slug'] . "' method='post'>
                <input type='hidden' name='slug' id='slug' value='" . $article['slug'] . "'>
                <button class='deleteButton' type='submit'><img class='articleCardIcon' src='/media/images/trashIcon.svg' alt='Delete'></button>
            </form>
        </span>";
                    }
                    echo "</div>";
                }
                ?>
            </div>
        </nav>
    </main>
</div>
</body>

</html>