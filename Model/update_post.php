<?php


require_once 'dbconfig.php';


    try {
        $conn = new PDO("mysql:host=localhost;dbname=$dbname", $username, $password);
//        echo "Connected to $dbname at $host successfully.";
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    //echo 'Connected successfully;
        
        $Title=$_POST['Title'];
        $Entry=$_POST['Entry'];
        $PostID=$_POST['PostID'];
        
        $sql = "UPDATE `posts` SET `Title`= '$Title', `Entry`='$Entry' WHERE `PostID`='$PostID' ";
        
        $conn->exec($sql);

        $conn = null; 
        echo "Post updated";
     
        
    }
    
    catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }


