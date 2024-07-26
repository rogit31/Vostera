<?php
function displayExcerpt($content, $slug, $maxLength = 1200){
    if(strlen($content) > $maxLength){
        $excerpt = substr($content, 0, $maxLength) . '...';
        $readMoreLink = '<a href=/read-article/' . $slug . '>read more</a>';
        return $excerpt . ' ' . $readMoreLink;
    }
    else{
        return $content;
    }
}
foreach ($articles as $item) {
    $content = $item['content'];
    $slug = $item['slug'];
    $excerpt = displayExcerpt($content, $slug);
    echo '
                <li class="itemPreview">
                      <a  class="headerPreview" href="/read-article/' . $slug . '"> ' . $item['title'] . ' </a>
                      <div class="contentPreview">' . $excerpt . '</div>
                </li>';}
