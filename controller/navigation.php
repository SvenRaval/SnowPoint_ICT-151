<?php
/**
 * @file    navigation.php
 * @brief   File Description
 * @author  Created by Youri.VILLIGER
 * @version 01.02.2023
 */

function home(): void
{
    require "view/home.php";
}

/**
 * @brief  This function is used to show a page when an erreur occur on get action
 * @return void
 */
function lost(): void
{
    require "view/lost.php";
}