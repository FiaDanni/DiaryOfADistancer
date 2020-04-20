<?php

require_once 'dbconfig.php';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //Prepare the statement
    $statement = $pdo->prepare("SELECT * FROM `posts`");
    //Execute the Statement
    $statement->execute();
    //Put statement into variable to processed by the HTML page
    $results = $statement->fetchAll(PDO::FETCH_OBJ);
    //var_dump($statements);
    $pdo = null;
    }
catch(PDOException $e)
    {
    echo $statement . "<br>" . $e->getMessage(). "<br>";
    }
    
    try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //Prepare the statement
    $statement = $pdo->prepare("SELECT posts.PostID, posts.Title, posts.Entry, posts.DateTime, categories.hashtag as categories
    FROM posts
    INNER JOIN categories
    ON posts.PostID=categories.POSTID
    WHERE categories.hashtag='#Fitness'");
    //Execute the Statement
    $statement->execute();
    //Put statement into variable to processed by the HTML page
    $categories = $statement->fetchAll(PDO::FETCH_OBJ);
    //var_dump($categories);
    $pdo = null;
    }
catch(PDOException $e)
    {
    echo $statement . "<br>" . $e->getMessage(). "<br>";
    }
    
    require 'SampleWebsite.php';
