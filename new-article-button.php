<?php

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    echo "
        <div class='writerButtonsWrapper'>
            <a class='link-button' id='newArticle' href='/create-article.php'>New</a> 
        </div>
    ";
}
