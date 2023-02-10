<?php
/**
 * @file   articlesManager.php
 * @brief  File description
 * @author Created by Sven.RAVAL
 * @version 08.02.2023
 */
function getArticles(){
    require 'model/dbConnector.php';

    $snowQuery="SELECT code, brand, model, snowLength, price, photo, active FROM snows;";

    $results = executeQuerySelect($snowQuery);
    return $results;
}