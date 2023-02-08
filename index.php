<?php
/**
 * @file    index.php
 * @brief   File Description
 * @author  Created by Daniel.CHEVALLEY
 * @version 01.02.2023
 */

require "controller/navigation.php";
require 'controller/article.php';

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
        default:
            lost();
    }
}
else{
    home();
}