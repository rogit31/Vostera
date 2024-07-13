<?php
if (!isset($_SESSION['loggedin'])){
    header("Location: login");
}
?>
<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Your Articles </title>
    <meta name="description" content="All of the user's articles.">
    <?php include __DIR__ . '/../components/head.php'; ?>
</head>

<body>
<div id="wrapper">
    <?php include __DIR__ . '/../components/header.php'; ?>
    <main>

        <?php  include_once  __DIR__ . '/../components/sideBar.php'; ?>

            <h1>Your Articles</h1>
        <div class="allArticles">
            <?php
            foreach ($articles as $key => $article) {
                echo "
    <div class='resultCard'>
        <a href=\"" . $article['slug'] . "\">" . $article['title'] . "</a>";
                if ($_SESSION['user_id'] == $article['author_id']) {
                    echo "
        <span>
            <form action='/edit-article/" . $article['slug'] . "' method='post'>
                <button type='submit'><img class='articleCardIcon' src='/media/images/editIcon.svg' alt='Edit'></button>
            </form>
            <form action='/delete-article/" . $article['slug'] . "' method='post'>
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
