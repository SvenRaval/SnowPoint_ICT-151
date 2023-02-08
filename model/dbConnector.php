<?php
/**
 * @file   dbConnector.php
 * @brief  File description
 * @author Created by Sven.RAVAL
 * @version 08.02.2023
 */
function openDBConnection(){
    $sqlDriver = 'mysql';
    $hostname = 'localhost';
    $port = '3307';
    $charset = 'utf8';
    $dbName = 'snows';
    $userName = 'RAVAL';
    $userPad = 'Rc9Pry';
    $dsn = $sqlDriver.':host='.$hostname.';dbname='.$dbName.';port='.$port.';charset='.$charset;

    try {
        $tempDBConnexion = new PDO($dsn, $userName, $userPad);
    }
    catch (PDOException){
        echo 'Connection failed'.$exception->getMessage();
    }
    return $tempDBConnexion;
}