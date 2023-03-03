<?php
/**
 * @file   article.php
 * @brief  File description
 * @author Created by Sven.RAVAL
 * @version 08.02.2023
 */
function displayArticles(){
    try {
        require_once 'model/articlesManager.php';
        $articles = getArticles();
    }catch (ModelDataBaseException $ex){
        $articleErrorMessage = 'Nous rencontrons des problèmes';
    } finally {
        require "view/article.php";
    }
}

/**
 * @return void
 */
function displayArticlesAdmin(){
    try {
        require_once'model/articlesManager.php';
        $articles = getArticles();
    }catch (ModelDataBaseException $ex){
        $articleErrorMessage = 'Nous rencontrons des problèmes';
    } finally {
        require "view/articleAdmin.php";
    }
}

/**
 * @param $articleId
 * @return void
 */
function displayArticleDetail($articleId)
{

    if (isset($articleId))
    {
        try{
            require_once "model/articlesManager.php";
            $articleDetailToDisplay = getArticleDetail($articleId);
        } catch (ModelDataBaseException $ex) {
            $articleDetailErrorMessage = "Nous rencontrons temporairement un problème technique pour afficher le détail de ce produit. Désolé du dérangement !";
        } finally {
            require "view/article-details.php";
        }
    }
}
function ArticleAddItem(){
    try {
        require_once 'model/articlesManager.php';
        $articles = getArticles();
    }catch (ModelDataBaseException $ex){
        $articleErrorMessage = 'Nous rencontrons des problèmes';
    } finally {
        require "view/ArticleCreate.php";
    }
}