<?php if(!$_SESSION['loggedin']){
    header('location: /login');
}?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title> Vostera - Create Article </title>
    <?php include_once __DIR__ . '/../components/head.php';?>
    <script src="https://cdn.tiny.cloud/1/1tpwed2c7xeky7pvn014hw49ang0yid4juflf5c17yn4ff30/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="js/articleScript.js" defer></script>
</head>

<body>
<div id="wrapper">
    <?php include __DIR__ . '/../components/header.php' ?>
    <main>
        <?php  include_once  __DIR__ . '/../components/sideBar.php'; ?>
        <h1 id="welcome">Create an article</h1>
        <form action="save-article" method="post">

            <div class="metadataInputWrapper">
                <label for="title">Title <span class="asterisk">*</span></label>
                <input type="text" id="title" name="title" placeholder="Title">

                <label for="description">Description <span class="asterisk">*</span></label>
                <input autocomplete="off" type="text" id="description" name="description" placeholder="What is this article about?">
                <?php
                session_start();
                if (isset($_SESSION['warning'])) {
                    echo '<p class="warningMessage">' . $_SESSION['warning'] . '</p>';
                    unset($_SESSION['warning']);
                }
                ?>
            </div>

            <div class="metadataDropdownWrapper">
                <div class="metadataDropdownSubWrapper">
                    <label for="category">Category</label>
                    <select name="category" id="category">
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
                </div>
                <div class="metadataDropdownSubWrapper">
                    <label for="secret">Visibility</label>
                    <select name="secret" id="secret">
                        <option value="Y">Hidden</option>
                        <option value="N">Visible</option>
                    </select>
                    <label for="is_draft">Save as draft</label>
                    <input type="checkbox" id="is_draft" name="is_draft">
                </div>
            </div>

            <p class="warningMessage">Fields with a * are required</p>
            <div id="searchResultsInline"></div>
            <label for="content">Content </label>
            <textarea id="content" class="textEditors" name="content"></textarea>
            <br>
            <label for="secret_content">Secret content</label>
            <textarea id="secret_content" class="textEditors" name="secret_content"></textarea>
            <button type="submit" formaction="save-article">Save Article</button>
            <button type="submit" formaction="save-draft">Save Draft </button>
        </form>
    </main>
</div>

</body>

</html>
