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
    catch (PDOException $exception){
        echo 'Connection failed'.$exception->getMessage();
    }
    return $tempDBConnexion;
}

// function to exexute query Select
function executeQuerySelect($query){
    $queryResult = null;

    $dbConnection= openDBConnection(); // Ouvre la connexion a la BD
    if ($dbConnection != null){
        $statement = $dbConnection->prepare($query); // Préparation de la requète
        $statement->execute(); // Exécution de la requète
        $queryResult = $statement->fetchAll(); // Prépare les résultats de la requète pour afficher
    }
    $dbConnection = null; // fermeture de la connexion à la DB
    return $queryResult;
}
function executeQueryNotSelect($query){
    $queryResult = null;

    $dbConnection= openDBConnection(); // Ouvre la connexion a la BD
    if ($dbConnection!= null){
        $statement = $dbConnection->prepare($query); // Préparation de la requète
        $queryResult = $statement->execute(); // Exécution de la requète
    }
    $dbConnection = null;
    return $queryResult;
}