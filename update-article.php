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
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="<?php echo $title?>">
            <label for="description">Description:</label>

            <input type="text" id="description" name="description" value="<?php echo $description?>">
            <label for="category">Category:</label>

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

            <label for="secret">Secret:</label>
            <select name="secret" id="secret">
                <option value="Y"<?php echo ($secret == 'Y') ? 'selected' : ''?>>Yes</option>
                <option value="N"<?php echo ($secret == 'N') ? 'selected' : ''?>>No</option>
            </select>

            <label for="content">Content:</label>
            <textarea id="content" name="content"><?php echo $content; ?></textarea>

            <label for="secret_content">Secret content:</label>
            <textarea id="secret_content" name="secret_content"><?php echo $secret_content; ?></textarea>

            <button type="submit">Save Article</button>
        </form>
        <script>
            tinymce.init({
                selector: 'textarea',
                plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss markdown',
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                tinycomments_mode: 'embedded',
                tinycomments_author: 'Author name',
                mergetags_list: [
                    { value: 'First.Name', title: 'First Name' },
                    { value: 'Email', title: 'Email' },
                ],
                ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
            });
        </script>



    </main>
</div>



<?php include ('footer.php') ?>

</body>

</html>
