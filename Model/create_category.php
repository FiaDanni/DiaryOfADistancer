<?php

require_once 'dbconfig.php';


    try {
        $conn = new PDO("mysql:host=localhost;dbname=$dbname", $username, $password);
//        echo "Connected to $dbname at $host successfully.";
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//        echo "Connected successfully";

       $sql = "INSERT INTO `categories`(`CategoriesID`, `PostID`, `Hashtag`) VALUES ('', '$PostID','$Hashtag')
        ";

        $conn->exec($sql);

        $conn = null; 
        echo "Added to database!";
//        to redirect:
//        header( 'Location: http://localhost/diary/Views/homepage.php' ) ;
        
    } catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }
    
