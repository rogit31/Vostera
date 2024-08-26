<?php
function displayExcerpt($content, $slug, $maxLength = 1200)
{
    if (strlen($content) > $maxLength) {
        $excerpt = substr($content, 0, $maxLength) . '...';
        $readMoreLink = '<a href=/read-article/' . $slug . '>read more</a>';
        return $excerpt . ' ' . $readMoreLink;
    } else {
        return $content;
    }
}

foreach ($articles as $article) {
    $content = $article['content'];
    $slug = $article['slug'];
    $username = $article['username'];
    $rawdate = new DateTime($article['last_updated']);
    $date = $rawdate->format('M dS Y');
    $excerpt = displayExcerpt($content, $slug);
    echo '
                <li class="itemPreview">
                      <a  class="headerPreview" href="/read-article/' . $slug . '"> ' . $article['title'] . ' </a>
                      <div class="contentPreview">' . $excerpt . ' </div>
                      <div class="excerptInfo">
                          <div class="excerptUsername">' . $username . '</div>
                          <div class="excerptDate">' . $date . '</div>
                      </div>
                </li>';
}
