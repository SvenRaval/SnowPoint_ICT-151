<?php
/**
 * @file   articlesManager.php
 * @brief  File description
 * @author Created by Sven.RAVAL
 * @version 08.02.2023
 */
function getArticles()
{
    require 'model/dbConnector.php';

    $snowQuery = "SELECT code, brand, model, snowLength, qtyAvailable, price, photo, active FROM snows;";

    $results = executeQuerySelect($snowQuery);
    return $results;
}

function getArticleDetail($articleId)
{
    $strgSeparator = '\'';

    // Query to get the selected snow. Active must setted to avoid that user can view an non active snow by entering the code in the URL
    $queryArticleDetail = 'SELECT code, brand, model, snowLength, price, qtyAvailable, description, photo, descriptionFull, level FROM snows WHERE code=' . $strgSeparator . $articleId . $strgSeparator . 'AND active=1';

    require 'model/dbConnector.php';
    $articleDetail = executeQuerySelect($queryArticleDetail);

    return $articleDetail[0];
}

function ArticleAddItemQuery($inputArticleCode, $inputMarque, $inputModel, $inputDescription, $inputLongeur, $inputAudience, $inputNiveau, $inputPrix, $inputQty, $inputLongDesc)
{
    $code = $inputArticleCode;

    $strgSeparator = '\'';

    // Query to enter the data entered by the admin in AddArticle form in snow database
    $queryAddArticle = "INSERT INTO snows(code, brand, model, snowLength, audience,qtyAvailable, description, price, descriptionFull, level) VALUES ('$inputArticleCode ','$inputMarque ','$inputModel ','$inputLongeur','$inputAudience','$inputQty','$inputDescription','$inputPrix ','$inputLongDesc','$inputNiveau');";
    $selectCodeCheck = "SELECT code FROM snows WHERE code ='$code';";
    require 'model/dbConnector.php';
    $check = executeQuerySelect($selectCodeCheck);
    if ($check != null){
        require "view/ArticleCreate.php";
        $message='Le code saisi est déjà utilisé, veuillez en saisir un non utilisé';
        echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
    }else{
        executeQueryNotSelect($queryAddArticle);
    }
}