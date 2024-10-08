<?php
$title = $articleData['title'];
$description = $articleData['description'];
$category = $articleData['category'];
$secret = $articleData['secret'];
$content = $articleData['content'];
$secret_content = $articleData['secret_content'];
$slug = $articleData['slug'];
$isDraft = $articleData['isDraft'];
$articleId = $articleData['article_id'];
$authorId = $articleData['author_id'];

if (!$_SESSION['loggedin'] || $_SESSION['user_id'] !== $authorId) {
    header('location: /');
    exit();
}

?>
<!doctype html>
<html lang="en">

<head>
    <title>Vostera - Update Article</title>
    <?php include_once __DIR__ . '/../components/head.php'; ?>
    <script src="https://cdn.tiny.cloud/1/1tpwed2c7xeky7pvn014hw49ang0yid4juflf5c17yn4ff30/tinymce/7/tinymce.min.js"
            referrerpolicy="origin"></script>
    <script src="/js/articleEditorScript.js" defer></script>
</head>

<body>
<div id="wrapper">
    <?php include __DIR__ . '/../components/header.php' ?>
    <main>
        <?php include_once __DIR__ . '/../components/sideBar.php'; ?>
        <h1 id="welcome">Edit an article</h1>
        <form action="/save-updated-article/<?php echo $slug; ?>" method="POST" class="articleEditingForm">
            <div class='metadataInputWrapper'>
                <label for="title">Title</label>
                <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($title); ?>">
                <label for="description">Description</label>
                <input type="text" id="description" name="description"
                       value="<?php echo htmlspecialchars($description); ?>">
            </div>
            <div class="metadataDropdownWrapper">
                <div class="metadataDropdownSubWrapper">
                    <label for="category">Category</label>
                    <select name="category" id="category">
                        <option value="history" <?php echo ($category == 'history') ? 'selected' : ''; ?>>History
                        </option>
                        <option value="places" <?php echo ($category == 'places') ? 'selected' : ''; ?>>Places</option>
                        <option value="people" <?php echo ($category == 'people') ? 'selected' : ''; ?>>People</option>
                        <option value="items" <?php echo ($category == 'items') ? 'selected' : ''; ?>>Items</option>
                        <option value="gods" <?php echo ($category == 'gods') ? 'selected' : ''; ?>>Gods</option>
                        <option value="organizations" <?php echo ($category == 'organizations') ? 'selected' : ''; ?>>
                            Organizations
                        </option>
                        <option value="plot" <?php echo ($category == 'plot') ? 'selected' : ''; ?>>Plot</option>
                        <option value="statblocks" <?php echo ($category == 'statblocks') ? 'selected' : ''; ?>>
                            Statblocks
                        </option>
                        <option value="meta" <?php echo ($category == 'meta') ? 'selected' : ''; ?>>Meta</option>
                    </select>
                </div>
                <div class="metadataDropdownSubWrapper">
                    <label for="secret">Visibility</label>
                    <select name="secret" id="secret">
                        <option value="Y" <?php echo ($secret == 'Y') ? 'selected' : '' ?>>Hidden</option>
                        <option value="N" <?php echo ($secret == 'N') ? 'selected' : '' ?>>Visible</option>
                    </select>
                    <label for="is_draft">Save as draft</label>
                    <input type="checkbox" id="is_draft" name="is_draft" <?php echo ($isDraft == 1) ? 'checked' : '' ?>>
                </div>
            </div>
            <label for="content">Content</label>
            <div id="searchResultsInline"></div>
            <textarea id="content" name="content"
                      class="textEditors"><?php echo htmlspecialchars($content); ?></textarea>
            <label for="secret_content">Secret content</label>
            <textarea id="secret_content" name="secret_content"
                      class="textEditors"><?php echo htmlspecialchars($secret_content); ?></textarea>
            <input type="hidden" name="article_id" value="<?php echo htmlspecialchars($articleId); ?>">
            <input type="hidden" name="slug" value="<?php echo htmlspecialchars($slug); ?>">
            <div class="articleEditingButtonsWrapper">
                <button type="submit" class="saveArticleButton">Save Article</button>
            </div>
        </form>
    </main>
</div>
</body>
</html>
