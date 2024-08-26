<?php
//AUTH CHECK
if (!isset($_SESSION['loggedin']) && $articleData['secret'] == 'Y') {
    header('location: /');
}

?>

<!doctype html>
<html lang="en">
<head>
    <title>Vostera - Lore - <?= ucfirst($articleData['category']) ?>
        - <?= htmlspecialchars($articleData['title']) ?></title>
    <?php include_once __DIR__ . '/../components/head.php'; ?>
</head>
<body id="1">
<div id="wrapper">
    <?php include __DIR__ . '/../components/header.php' ?>
    <ul class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/lore">Lore</a></li>
        <li><a href="/lore/<?= $articleData['category'] ?>"><?= ucfirst($articleData['category']) ?></a></li>
        <li><?= htmlspecialchars($articleData['title']) ?></li>
    </ul>

    <div class="sidenav">
        <!-- TODO: add headers here eventually -->
    </div>

    <main>
        <?php include_once __DIR__ . '/../components/sideBar.php';
        include_once __DIR__ . '/../components/sideBarMobileButton.php'; ?>
        <div class="article-tile">
            <h1><?= htmlspecialchars($articleData['title']) ?></h1>
            <?= $articleData['content'] ?><br>
            <?php if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == $articleData['author_id']) {
                echo $articleData['secret_content'];
            } ?>
        </div>
        <?php if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == $articleData['author_id']) {
            echo "
        <span class='editorButtonsWrapper'>
            <form action='/edit-article/" . $articleData['slug'] . "' method='post'>
                <button type='submit' class='editorButtons'><img src='/media/images/editIcon.svg' alt='Edit'></button>
            </form>
            <form action='/delete-article/" . $articleData['slug'] . "' method='post'>
                <input type='hidden' name='slug' id='slug' value='" . $articleData['slug'] . "'>
                <button class='deleteButton editorButtons' type='submit'><img src='/media/images/trashIcon.svg' alt='Delete'></button>
            </form>
        </span>";
        } ?>
    </main>

    <div class="button-wrapper">
        <button><a class="backbutton" href="/lore/<?= $articleData['category'] ?>">Back
                to <?= ucfirst($articleData['category']) ?></a></button>
        <button><a class="backbutton" href="/lore">Back to lore</a></button>
    </div>

</div>
</body>
</html>
