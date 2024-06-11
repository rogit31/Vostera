<?php

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    echo "
        <div class='writerButtonsWrapper'>
            <button id='newArticle'><a href='/create-article.php'>New</a></button> 
        </div>
    ";
}
