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
        $article = getArticles();
    }catch (ModelDataBaseException $ex){
        $articleErrorMessage = 'Nous rencontrons des problèmes';
    } finally {
        require "view/articles.php";
    }
}