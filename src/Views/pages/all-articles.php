<!doctype html>
<html lang="en">

<head>
    <title> Vostera - All Articles </title>
    <meta name="description" content="Repository of all articles published on the Vostera website.">
    <?php include __DIR__ . '/../components/head.php';
    include_once __DIR__ . '/../components/sideBarMobileButton.php'; ?>
    <script src="/js/sortArticlesScript.js" defer></script>
</head>

<body>
<div id="wrapper">
    <?php include __DIR__ . '/../components/header.php'; ?>
    <main>

        <?php include_once __DIR__ . '/../components/sideBar.php'; ?>

        <h1>All articles</h1>
        <form action="" id="filterForm">

            <label for="searchbar"></label>
            <input type="text" id="searchbarInline" autocomplete="off" placeholder="Search for articles...">

            <label for="category">Category</label>
            <select name="category" id="category">
                <option value="">Any</option>
                <option value="history">History</option>
                <option value="places">Places</option>
                <option value="people">People</option>
                <option value="items">Items</option>
                <option value="gods">Gods</option>
                <option value="organizations">Organizations</option>
                <option value="plot">Plot</option>
                <option value="statblocks">Statblocks</option>
                <option value="meta">Meta</option>
            </select>

            <label for="sort">Sort by:</label>
            <select name="sort" id="sort">
                <option value="latest">Latest</option>
                <option value="earliest">Earliest</option>
                <option value="alphabetical">Alphabetical</option>
            </select>

            <button type="submit" style="display: none">Submit</button>
        </form>

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

    </main>
</div>
</body>

</html>
