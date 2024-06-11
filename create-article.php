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

            <div class="metadataInputWrapper">
                <label for="title">Title <span class="asterisk">*</span></label>
                <input type="text" id="title" name="title" placeholder="Title">

                <label for="description">Description <span class="asterisk">*</span></label>
                <input autocomplete="off" type="text" id="description" name="description" placeholder="What is this article about?">
                <?php
                session_start();
                if (isset($_SESSION['warning'])) {
                    echo '<p class="warningMessage">' . $_SESSION['warning'] . '</p>';
                    unset($_SESSION['warning']); // Clear the warning after displaying it
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
                        <option value="Y">Visible</option>
                        <option value="N">Hidden</option>
                    </select>
                </div>
            </div>

            <p class="warningMessage">Fields with a * are required</p>

            <label for="content">Content </label>
            <textarea id="content" name="content"></textarea>
            <br>
            <label for="secret_content">Secret content</label>
            <textarea id="secret_content" name="secret_content"></textarea>
            <button type="submit">Save Article</button>
        </form>
        <script>
            tinymce.init({
                selector: 'textarea',
                height: '600px',
                plugins: 'anchor autolink charmap codesample image link lists media table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode advtemplate mentions tableofcontents footnotes mergetags autocorrect typography inlinecss markdown',
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
