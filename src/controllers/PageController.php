<?php

namespace App\Controllers;

use App\Models\ArticleModel;

class PageController
{
    //---------------------------TOP LEVEL PAGES---------------------------------
    public function home()
    {
        return $this->renderView('home');
    }

    public function lore()
    {
        $articleModel = new ArticleModel();
        $articles = $articleModel->getAllArticles();
        return $this->renderView('lore', ['articles' => $articles]);
    }

    public function maps()
    {
        return $this->renderView('maps');
    }

    public function houserules()
    {
        return $this->renderView('houserules');
    }

    public function contact()
    {
        return $this->renderView('contact');
    }

    public function playercharacters()
    {
        return $this->renderView('playercharacters');
    }
    public function allArticles(){
        $articleModel = new ArticleModel();
        $articles = $articleModel->getAllPublishedArticlesOrderedByTitle();
        return $this->renderView('all-articles', ['articles' => $articles]);
    }
    public function yourArticles(){
        $articleModel = new ArticleModel();
        $articles =$articleModel->getYourArticles();
        return $this->renderView('your-articles', ['articles' => $articles]);

    }
    public function yourDrafts(){
        $articleModel = new ArticleModel();
        $articles = $articleModel->getYourDrafts();
        return $this->renderView('your-drafts', ['articles' => $articles]);
    }
    public function yourSecrets(){
        $articleModel = new ArticleModel();
        $articles = $articleModel->getYourSecrets();
        return $this->renderView('your-secrets', ['articles' => $articles]);
    }
//--------------------------- AUTHENTICATION ------------------------
    public function login()
    {
        return $this->renderView('login');
    }
    public function register(){
        return $this->renderView('register');
    }

// -------------------------LORE SUB-PAGES--------------------------------
    public function loreGods()
    {
        $articleModel = new ArticleModel();
        $articles = $articleModel->getArticlesByCategory('gods');
        return $this->renderView('lore/gods', ['articles' => $articles]);
    }

    public function loreHistory()
    {
        $articleModel = new ArticleModel();
        $articles = $articleModel->getArticlesByCategory('history');
        return $this->renderView('lore/history', ['articles' => $articles]);
    }

    public function lorePlaces(){
        $articleModel = new ArticleModel();
        $articles = $articleModel->getArticlesByCategory('places');
        return $this->renderView('lore/places', ['articles' => $articles]);
    }

    public function lorePeople(){
        $articleModel = new ArticleModel();
        $articles = $articleModel->getArticlesByCategory('people');
        return $this->renderView('lore/people', ['articles' => $articles]);
    }
    public function loreItems(){
        $articleModel = new ArticleModel();
        $articles = $articleModel->getArticlesByCategory('items');
        return $this->renderView('lore/items', ['articles' => $articles]);
    }

    public function loreOrganizations(){
        $articleModel = new ArticleModel();
        $articles = $articleModel->getArticlesByCategory('organizations');
        return $this->renderView('lore/organizations', ['articles' => $articles]);
    }
    public function lorePlot(){
        $articleModel = new ArticleModel();
        $articles = $articleModel->getArticlesByCategory('plot');
        return $this->renderView('lore/plot', ['articles' => $articles]);
    }
    public function loreStatblocks(){
        $articleModel = new ArticleModel();
        $articles = $articleModel->getArticlesByCategory('statblocks');
        return $this->renderView('lore/statblocks', ['articles' => $articles]);
    }
    public function loreMeta(){
        $articleModel = new ArticleModel();
        $articles = $articleModel->getArticlesByCategory('meta');
        return $this->renderView('lore/meta', ['articles' => $articles]);
    }

    //--------------------ARTICLE RELATED VIEWS ---------------------
    public function readArticle($articleSlug)
    {
        $articleModel = new ArticleModel;
        $articleData = $articleModel->getArticleBySlug($articleSlug);
        return $this->renderView('read-article', ['articleData' => $articleData]);
    }
    public function createArticle(){
        return $this->renderView('create-article');
}

public function editArticle($slug){
        $articleModel = new ArticleModel;
        $articleData = $articleModel->getArticleBySlug($slug);
        return $this->renderView('edit-article', ['articleData'=> $articleData]);
}
public function deleteArticle($slug){
        $articleModel = new ArticleModel;
        $articleModel->deleteArticle($slug);
}

    // Helper method to render views
    public function renderView($viewName, $data = [])
    {
        extract($data); // Extract associative array into variables
        include_once __DIR__ . "/../views/pages/{$viewName}.php";
        include_once __DIR__ . '/../views/components/footer.php';
    }

}