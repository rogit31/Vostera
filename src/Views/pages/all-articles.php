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

            <label for="searchbarInline">Filter</label>
            <input type="text" id="searchbarInline" autocomplete="off" placeholder="Filter by title">

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

            <label for="sort">Sort by</label>
            <select name="sort" id="sort">
                <option value="alphabetical">Alphabetical</option>
                <option value="latest">Latest</option>
                <option value="earliest">Earliest</option>
            </select>

            <button type="submit" style="display: none">Submit</button>
        </form>
        <hr>
        <div id="loadingSpinner" style="display: none;">
            <img src="/media/images/pixelSword.png" alt="Loading..."/>
        </div>
        <div class="allArticles">

        </div>

    </main>
</div>
</body>

</html>
