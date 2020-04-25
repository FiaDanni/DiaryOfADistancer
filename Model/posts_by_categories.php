<?php

require_once 'dbconfig.php';
include '../Controllers/pageCategoryController.php';

 try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //Prepare the statement
    $statement = $pdo->prepare("SELECT posts.PostID, posts.Title, posts.Entry, posts.DateTime, categories.hashtag as categories
    FROM posts
    INNER JOIN categories
    ON posts.PostID=categories.POSTID 
    WHERE categories.hashtag='$hashtag' ORDER BY posts.DateTime DESC");
    //Execute the Statement
    $statement->execute();
    //Put statement into variable to processed by the HTML page
    
    $categories = $statement->fetchall(PDO::FETCH_OBJ);
    //var_dump($categories);
    $pdo = null;
    }
catch(PDOException $e)
    {
    echo $statement . "<br>" . $e->getMessage(). "<br>";
    }
    
    //var_dump($categories);
      
    //$chunk = array_chunk($categories, 3);
    //print_r($chunk);
    
    ?>
