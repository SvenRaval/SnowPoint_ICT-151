<?php
/**
 * @file   articlesManager.php
 * @brief  File description
 * @author Created by Sven.RAVAL
 * @version 08.02.2023
 */
function getArticles(){
    require 'model/dbConnector.php';

    $snowQuery="SELECT code, brand, model, snowLength, qtyAvailable, price, photo, active FROM snows;";

    $results = executeQuerySelect($snowQuery);
    return $results;
}
function getArticleDetail($articleId)
{
    $strgSeparator = '\'';

    // Query to get the selected snow. Active must setted to avoid that user can view an non active snow by entering the code in the URL
    $queryArticleDetail = 'SELECT code, brand, model, snowLength, price, qtyAvailable, description, photo, descriptionFull, level FROM snows WHERE code='.$strgSeparator.$articleId.$strgSeparator.'AND active=1';

    require 'model/dbConnector.php';
    $articleDetail = executeQuerySelect($queryArticleDetail);

    return $articleDetail[0];
}