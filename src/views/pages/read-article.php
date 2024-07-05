<?php

include('db.php');

$id = (int)$_GET['id'];
$sql = "SELECT * FROM articles WHERE article_id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);
$article = $stmt->fetch();
$title = $article['title'];
$category = $article['category'];
$secret = $article['secret'];
$content = $article['content'];
$secret_content = $article['secret_content'];
$updateArticleURL = 'update-article.php?id='.$id;

?>

<!doctype html>
<html lang="en">

<head>
    <title> Vostera - Lore - <?php echo ucfirst(htmlspecialchars($category)); ?> - <?php echo htmlspecialchars($title); ?> </title>
    <?php
    include('head.php') ?>
</head>

<body id="1">
<div id="wrapper">
    <?php
    include('header.php') ?>

    <ul class="breadcrumb">
        <li><a href="/index.php">Home</a></li>
        <li><a href="html/lore.php">Lore</a></li>
        <li><a href="html/lore/<?php echo htmlspecialchars($category)?>/<?php echo htmlspecialchars($category)?>.php"> <?php echo ucfirst(htmlspecialchars($category)); ?></a></li>
        <li><?php echo htmlspecialchars($title)?></li>
    </ul>
    <div class="sidenav article-tile">
        <ol>
            <li><a href="#1">Top</a></li>
            <!--Headers-->
        </ol>
    </div>

    <main>
        <div class="article-tile">
            <h1><?php echo $title?></h1>
            <?php echo $content . "<br>";
            if($_SESSION['loggedin']){
                echo $secret_content;
            }
            ?>
        </div>
        <?php
        include_once('editor-buttons.php');
        ?>
    </main>


    <div class="button-wrapper">
        <button><a class="backbutton" href="/html/lore/<?php
            echo $category ?>/<?php
            echo $category ?>.php">Back to <?php
                echo $category ?></a></button>
        <button><a class="backbutton" href="../../lore.php">Back to lore</a></button>
    </div>

    <?php include('footer.php');
    if($secret == 'Y'){
        if (!$_SESSION['loggedin']){
            header('location: index.php');
        }
    }?>
</div>
</body>

</html>
