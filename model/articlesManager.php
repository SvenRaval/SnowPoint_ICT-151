<?php
/**
 * @file   articlesManager.php
 * @brief  File description
 * @author Created by Sven.RAVAL
 * @version 08.02.2023
 */
function getArticles(){
    require 'dbConnector.php';
    $query='SELECT * FROM snows.snows';
    $result = executeQuerySelect($query);
    return $result;
}