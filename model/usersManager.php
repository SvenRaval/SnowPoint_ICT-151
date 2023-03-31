<?php
/**
 * @file   usersManager.php
 * @brief  File description
 * @author Created by Sven.RAVAL
 * @version 29.03.2023
 */

function isLoginCorrect($userEmailAddress, $userPsw){
    $result = false;

    $strseparator = '\'';
    $loginQuery = 'SELECT userHashPsw FROM users WHERE userEmailAddress =' . $strseparator . $userEmailAddress . $strseparator;

    require_once 'model/dbConnector.php';
    $queryResult = executeQuerySelect($loginQuery);

    if(count($queryResult) == 1) {
        $userHashPsw = $queryResult[0]['userHashPsw'];
        $result = password_verify($userPsw, $userHashPsw);
    }
    return $result;
}


function getUserType($userEmailAddress)
{
    $result = false;

    $strSeparator = '\'';
    $loginQuery = 'SELECT userType FROM users WHERE userEmailAddress = ' . $strSeparator . $userEmailAddress . $strSeparator;

    require_once 'model/dbConnector.php';
    $queryResult = executeQuerySelect($loginQuery);

    if (count($queryResult) == 1) {
        $result = $queryResult[0]['userType'];
    }
    else{
        $result = 0;   // default customer
    }
    return $result;
}

function createSession($userEmailAddress){
    $_SESSION['userEmailAddress'] = $userEmailAddress;
}