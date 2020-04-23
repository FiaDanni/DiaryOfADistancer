<?php

require_once 'dbconfig.php';


    try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement = $pdo->prepare("SELECT `PostID`, `Title`, `Entry`, `DateTime` FROM `posts` WHERE `PostID`= '$PostID'");
    //Execute the Statement
    $statement->execute();
    //Put statement into variable to processed by the HTML page
    $blogPost = $statement->fetchall(PDO::FETCH_ASSOC)[0];
    $PostID = $blogPost['PostID'];
    $Title = $blogPost['Title'];
    $Entry = $blogPost['Entry'];
    $DateTime = $blogPost['DateTime'];
    $pdo = null;
        
    } catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }
    
