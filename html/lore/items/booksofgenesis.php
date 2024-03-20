<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - Items - Books of Genesis </title>
    <?php include('../../../head.php') ?>
</head>

<body>
    <div id="wrapper">
        <header id="1">
            <?php include('../../../header.php') ?>
        </header>
        <?php if (!isset($_SESSION['loggedin'])) {
            header('Location: ../../lore.php');
            exit;
        } ?>
        <ul class="breadcrumb">
            <li><a href="../../../index.php">Home</a></li>
            <li><a href="../../lore.php">Lore</a></li>
            <li><a href="items.php">Items</a></li>
            <li>Books of Genesis</li>
        </ul>
        <div class="sidenav article-tile">
            <ol>
                <li><a href="#1">Top</a></li>
                <li><a href="#2">Tomes</a></li>
            </ol>
        </div>
        <main>
            <div class="article-tile">
                <h1>The Books Of Genesis</h1>
                <p>The books of genesis are the books left behind by <a href="../people/planewalker.html" class="crosslink">Aylin Ashir</a> to her daughter, <a href="../people/nolaashir.html" class="crosslink">Nola Ashir</a>.</p>
                <h2 id="2">Tomes</h2>
                <hr class="solid">
                <p>There are ... tomes to this collection of books each describing a different aspect of knowledge that the planewalker deemed useful for Nora to use and advance her cause.</p>
            </div>
        </main>
        <div class="button-wrapper">
            <a class="backbutton" href="items.php">Back to items</a>
            <a class="backbutton" href="../../lore.php">Back to lore</a>
        </div>

        <?php include('../../../footer.php') ?>
    </div>
</body>

</html>