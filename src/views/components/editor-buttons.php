<?php
if($_SESSION['loggedin']){
    echo "
            <div class='writerButtonsWrapper'>
                <button id='edit'><a href='update-article.php?id={$id}'>Edit</a></button>
                <button id='delete'><a href='delete-article.php?id={$id}'> Delete</a></button> 
                <button id='newArticle'><a href='src/views/create-article.php'>New</a></button> 
            </div>
             ";
}