<?php
echo "category controller";


    $command = $_POST["category"];
    
if ($command == 'create') {
    $PostID = $_POST["PostID"];
    $Hashtag = $_POST["Hashtag"];
    require '../Model/create_category.php';  
}
