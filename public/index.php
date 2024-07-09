<?php
//            <----- Router ----->
session_start();

use App\Controllers\AuthController;
use App\Controllers\SearchController;
use App\Models\ArticleModel;
use Core\Router;
use App\Controllers\PageController;
use App\Controllers\ArticleController;


require __DIR__ . '/../vendor/autoload.php';

$router = new Router();
$pageController = new PageController();
$authController = new AuthController();
$searchController = new SearchController();
$articleModel = new ArticleModel();

// -------------------- PAGE ROUTING ----------------
$router->get('', [$pageController, 'home']);
$router->get('home', [$pageController, 'home']);
$router->get('lore', [$pageController, 'lore']);
$router->get('maps', [$pageController, 'maps']);
$router->get('houserules', [$pageController, 'houserules']);
$router->get('contact', [$pageController, 'contact']);
$router->get('login', [$pageController, 'login']);
$router->get('playercharacters', [$pageController, 'playercharacters']);
$router ->get('all-articles', [$pageController, 'allArticles']);
$router->get('your-articles', [$pageController, 'yourArticles']);
$router->get('your-drafts', [$pageController, 'yourDrafts']);
$router->get('your-secrets', [$pageController, 'yourSecrets']);
// <--------------lore pages --------------->
$router->get('lore/gods', [$pageController, 'loreGods']);
$router->get('lore/history', [$pageController, 'loreHistory']);
$router->get('lore/places', [$pageController, 'lorePlaces']);
$router->get('lore/people', [$pageController, 'lorePeople']);
$router->get('lore/items', [$pageController, 'loreItems']);
$router->get('lore/organizations', [$pageController, 'loreOrganizations']);
$router->get('lore/plot', [$pageController, 'lorePlot']);
$router->get('lore/statblocks', [$pageController, 'loreStatBlocks']);
$router->get('lore/meta', [$pageController, 'loreMeta']);

// <-------------AUTHENTICATION ROUTING------------------>
$router->post('login/process', [$authController, 'processLoginForm']);
$router->get('logout', [$authController, 'logout']);
$router->get('register', [$pageController, 'register']);
$router->post('register/process', [$authController, 'processRegister']);

// -------------------- ARTICLE ROUTING ---------------------------
$router->get('read-article/{slug}', function($slug) use ($pageController) {
    return $pageController->readArticle($slug);
});
$router->post('edit-article/{slug}', function($slug) use ($pageController){
    return $pageController->editArticle($slug);
});
$router->post('delete-article/{slug}', function($slug) use($pageController){
    return $pageController->deleteArticle($slug);
});
$router->post('save-updated-article/{slug}', [$articleModel, 'saveUpdatedArticle']);
$router->get('create-article' , [$pageController, 'createArticle']);
$router->post('save-article' , [$articleModel, 'saveArticle']);
$router->post('save-draft', [$articleModel, 'saveDraft']);

//--------------------------Live search--------------------------------
$router->post('livesearch', [$searchController, 'liveSearch']);
$router->post('articleLivesearch', [$searchController, 'articleLivesearch']);

//--------------------DYNAMIC ARTICLE FETCHING -----------------------
$router->get('recentArticlesWithLimit/{limit}', function ($limit)  {
    $articleController = new ArticleController();
    $articleController->getRecentArticles($limit);
});


$router->route();


