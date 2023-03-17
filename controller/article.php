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
function ArticleAddItem($addItem){

        if (isset($addItem['InputArticleCode']) && isset($addItem['InputMarque']) && isset($addItem['InputModele']) && isset($addItem['InputDescription'])
            && isset($addItem['InputLongeur']) && isset($addItem['InputNiveau']) && isset($addItem['InputPrix']) && isset($addItem['InputQty']) && isset($addItem['InputDescComp']) && isset($addItem['radioGenre'])) {
            // extract data from the form
            $inputArticleCode = $addItem['InputArticleCode'];
            $inputMarque = $addItem['InputMarque'];
            $inputModel = $addItem['InputModele'];
            $inputDescription = $addItem['InputDescription'];
            $inputLongeur = $addItem['InputLongeur'];
            $inputNiveau = $addItem['InputNiveau'];
            $inputPrix = $addItem['InputPrix'];
            $inputQty = $addItem['InputQty'];
            $inputLongDesc = $addItem['InputDescComp'];
            $inputAudience = $addItem["radioGenre"];
            require_once 'model/articlesManager.php';
            ArticleAddItemQuery($inputArticleCode, $inputMarque, $inputModel, $inputDescription, $inputLongeur, $inputAudience, $inputNiveau, $inputPrix, $inputQty, $inputLongDesc);
        }else { //the user does not yet fill the form
            require "view/ArticleCreate.php";
        }
}
function RemoveArticle(){
    require "model/articlesManager.php";
    RemoveArticleQuery();
}