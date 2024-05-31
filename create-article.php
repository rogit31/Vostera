<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Create Article </title>
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
        <h1 id="welcome">Create an article</h1>
        <form action="save-article.php" method="post">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title">

            <label for="description">Description:</label>
            <input type="text" id="description" name="description">
            <label for="category">Category:</label>
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
            <label for="secret">Secret:</label>
            <select name="secret" id="secret">
                <option value="Y">Yes</option>
                <option value="N">No</option>
            </select>
            <label for="content">Content:</label>
            <textarea id="content" name="content"></textarea>
            <label for="secret_content">Secret content:</label>
            <textarea id="secret_content" name="secret_content"></textarea>
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
