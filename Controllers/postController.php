<?php

if (!empty($_POST['PostID'])) {$postID = $_POST['PostID'];}
$action = $_POST['action'];

if ($action == 'update') {
    session_start();
    $_SESSION["PostID"] = $postID;
    header('Location: http://localhost/BlogPost/Views/updatePost.php');
}

if ($action == 'updatePost') {
    require '../Model/update_post.php';
    echo 'post updated';
} 


if ($action=='delete'){
    require_once '../Model/delete_post.php';
    
    //require to delete post model
}

if ($action == 'create') {
    require_once '../Model/create_blog_post.php';
}
