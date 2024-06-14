<?php
include('db.php');

$id = (int)$_GET['id'];
$sql = "SELECT * FROM articles WHERE article_id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);
$article = $stmt->fetch();
$title = $article['title'];
$description = $article['description'];
$category = $article['category'];
$secret = $article['secret'];
$content = $article['content'];
$secret_content = $article['secret_content'];

    if (!$_SESSION['loggedin']){
        header('location: index.php');
    }

?>

<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Update Article </title>
    <?php include('head.php');?>
    <script src="https://cdn.tiny.cloud/1/1tpwed2c7xeky7pvn014hw49ang0yid4juflf5c17yn4ff30/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />
</head>

<body>
<div id="wrapper">


    <?php include('header.php');
    if(!$_SESSION['loggedin']){
        header('location: /index.php');
    }?>

    <main>
        <h1 id="welcome">Edit an article</h1>
        <form action="save-updated-article.php?id=<?php echo $id ?>" method="POST">
        <div class='metadataInputWrapper'>
            <label for="title">Title</label>
            <input type="text" id="title" name="title" value="<?php echo $title?>">
            <label for="description">Description</label>
            <input type="text" id="description" name="description" value="<?php echo $description?>">
        </div>
        <div class="metadataDropdownWrapper">
            <div class="metadataDropdownSubWrapper">
                <label for="category">Category</label>
                <select name="category" id="category">
                    <option value="history" <?php echo($category == 'history') ? 'selected' : ''; ?>>History</option>
                    <option value="places"<?php echo($category == 'places') ? 'selected' : ''; ?>>Places</option>
                    <option value="people"<?php echo($category == 'people') ? 'selected' : ''; ?>>People</option>
                    <option value="items"<?php echo($category == 'items') ? 'selected' : ''; ?>>Items</option>
                    <option value="gods"<?php echo($category == 'gods') ? 'selected' : ''; ?>>Gods</option>
                    <option value="organizations"<?php echo($category == 'organizations') ? 'selected' : ''; ?>>Organizations</option>
                    <option value="plot"<?php echo($category == 'plot') ? 'selected' : ''; ?>>Plot</option>
                    <option value="statblocks"<?php echo($category == 'statblocks') ? 'selected' : ''; ?>>Statblocks</option>
                    <option value="meta"<?php echo($category == 'meta') ? 'selected' : ''; ?>>Meta</option>
                </select>
            </div>
            <div class="metadataDropdownSubWrapper">
                <label for="secret">Visibility</label>
                <select name="secret" id="secret">
                    <option value="Y"<?php echo ($secret == 'Y') ? 'selected' : ''?>>Hidden</option>
                    <option value="N"<?php echo ($secret == 'N') ? 'selected' : ''?>>Visible</option>
                </select>
            </div>

        </div>


            <label for="content">Content:</label>
            <textarea id="content" name="content"><?php echo $content; ?></textarea>

            <label for="secret_content">Secret content:</label>
            <textarea id="secret_content" name="secret_content"><?php echo $secret_content; ?></textarea>

            <button type="submit">Save Article</button>
        </form>
        <script>
            tinymce.init({
                selector: 'textarea',
                height: '600px',
                plugins: 'anchor autolink charmap codesample image link lists table visualblocks wordcount linkchecker ',
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | spellcheckdialog typography | align lineheight | checklist numlist bullist indent outdent | removeformat',
                mergetags_list: [
                    { value: 'First.Name', title: 'First Name' },
                    { value: 'Email', title: 'Email' },
                ]
            });
        </script>



    </main>
</div>



<?php include ('footer.php') ?>

</body>

</html>
