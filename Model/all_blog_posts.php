<?php

require_once 'dbconfig.php';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //Prepare the statement
    $statement = $pdo->prepare("SELECT * FROM posts ORDER BY DateTime DESC");
    //Execute the Statement
    $statement->execute();
    //Put statement into variable to processed by the HTML page
    $posts = $statement->fetchAll(PDO::FETCH_OBJ);
    //var_dump($statements);
    $pdo = null;
    }
catch(PDOException $e)
    {
    echo $statement . "<br>" . $e->getMessage(). "<br>";
    }
    
