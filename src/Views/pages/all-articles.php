<!doctype html>
<html lang="en">

<head>
    <title> Vostera - All Articles </title>
    <meta name="description" content="Repository of all articles published on the Vostera website.">
    <?php include __DIR__ . '/../components/head.php'; ?>
</head>

<body>
<div id="wrapper">
    <?php include __DIR__ . '/../components/header.php'; ?>
    <main>

        <?php  include_once  __DIR__ . '/../components/sideBar.php'; ?>

            <h1>All articles</h1>
        <div class="allArticles">
            <?php
            foreach ($articles as $key => $article) {
                echo "
    <div class='resultCard'>
        <a href=\"/read-article/" . $article['slug'] . "\">" . $article['title'] . "</a>";
                if ( isset($_SESSION['user_id']) && $_SESSION['user_id'] == $article['author_id']) {
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
