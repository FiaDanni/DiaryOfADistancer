<?php

require_once 'dbconfig.php';
$Title = $_POST['Title'];
$Entry = $_POST['Entry'];
$Hashtag = $_POST['Hashtag'];


    try {
        $conn = new PDO("mysql:host=localhost;dbname=$dbname", $username, $password);
//        echo "Connected to $dbname at $host successfully.";
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//        echo "Connected successfully";

       $sql = "INSERT INTO `posts`(`Title`, `Entry`) VALUES ('$Title', '$Entry')";

        $conn->exec($sql);
        
        $statement = $conn->prepare("SELECT * FROM `posts` WHERE `Title`='$Title'");
        $statement->execute();
        $blogPost = $statement->fetchall(PDO::FETCH_ASSOC)[0];
        $PostID = $blogPost['PostID'];
        
        
       $sql2 = "INSERT INTO `categories`(`PostID`, `Hashtag`) VALUES ('$PostID', '$Hashtag')";
        $conn->exec($sql2);


        $conn = null; 
        echo "Added to database!";

        
    } catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }
    
header("Location: http://localhost/Final/Views/blogpost.php?PostID=$PostID");
die();

    

    