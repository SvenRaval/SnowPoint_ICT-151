<?php
/**
 * @file    index.php
 * @brief   File Description
 * @author  Created by Sven.RAVAL
 * @version 01.02.2023
 */

require "controller/navigation.php";
require 'controller/article.php';
session_start();


//Test if there is query of display a specific page
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'home':
            home();
            break;
        case 'displayArticle':
            displayArticles();
            break;
        case 'displayArticleAdmin':
            displayArticlesAdmin();
            break;
        case 'displayArticleDetail':
            displayArticleDetail($_GET['articleId']);
            break;
        case 'ArticleAddItem':
            ArticleAddItem($_POST);
            break;
        case 'articleRemoveItemCode':
            RemoveArticle();
            break;
        default:
            lost();
    }
}
else{
    home();
}