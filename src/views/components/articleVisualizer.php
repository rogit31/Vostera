<?php
use App\Models\ArticleModel;
require_once __DIR__ .'/../../../vendor/autoload.php';

$articleModel = new ArticleModel();
$articles = $articleModel->getAllPublishedArticlesOrderedByTitle();



//data structure: references [origin => reference, origin2 => reference2]
// then filter that array based on origin name and reference name for data about specific articles

function parseArticlesForLinks($articles){
    $parsedCount = 0;
    $references =[];
    if(!isset($articles)){
        echo 'No articles found';
        exit();
    }
    foreach ($articles as $key=>$article){
        if(empty($article['content'])){
            echo 'Encountered empty article. Articles parsed before encountering article:' .  $parsedCount . PHP_EOL;
            echo 'Empty article title:' . $article['title'];
            continue;
        }
        $doc = new DOMDocument();
        @$doc->loadHTML($article['content']);
        $parsed = $doc->saveHTML();
        $parsedCount ++;
        $pattern = '/\/read-article\/([^"\']+)+/';
        preg_match_all($pattern,$parsed, $match );
        $references[$article['slug']] =  $match[1];
    }
     $referencesMade = countReferencesMade($references);
    $referred = countReferred($references);
    return [
        $references,
        $referencesMade,
        $referred
    ];

}

function countReferencesMade($references){
    $referencesMadeCount =[];
    foreach ($references as $originSlug => $referencedArray){
        $referencesMadeCount[$originSlug] = count($referencedArray);
    }
    return $referencesMadeCount;
};
function countReferred($references){
    $referenceCounts = [];

    foreach ($references as $referencedArray){
        foreach($referencedArray as $referencedSlug){
            if(!isset($referenceCounts[$referencedSlug])){
                $referenceCounts[$referencedSlug] = 0;
            }
            $referenceCounts[$referencedSlug]++;
        }
    }
    return $referenceCounts;
}
$data = parseArticlesForLinks($articles);
