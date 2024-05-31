<?php
if($_SESSION['loggedin']){
    echo"
            <div class='writerButtonsWrapper'>
                <button id='newArticle'><a href='create-article.php'>New</a></button> 
            </div>
             ";
}