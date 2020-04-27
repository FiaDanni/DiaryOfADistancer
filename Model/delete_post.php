<?php

require_once 'dbconfig.php';


    try {
        $conn = new PDO("mysql:host=localhost;dbname=$dbname", $username, $password);
//        echo "Connected to $dbname at $host successfully.";
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Connected successfully";
        
 $PostID=$_POST['PostID'];
     
      
      $sql = "DELETE FROM `categories` WHERE `PostID` = '$PostID'"; 
        $conn->exec($sql);
        
           
       $sql2 = "DELETE FROM `posts` WHERE `PostID`= '$PostID' ";

        $conn->exec($sql2);

        $conn = null; 
        //echo "Deleted from database";
       //to redirect:

        
    } catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }
    
        header ('Location: http://localhost/Final/Views/blogpostdeleted.php') ;

