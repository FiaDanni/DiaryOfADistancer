<?php

$postID = $_POST['PostID'];
$action = $_POST['action'];

if ($action == 'update') {
    session_start();
    $_SESSION["PostID"] = $postID;
    header('Location: http://localhost/diary/Views/updatePost.php');
}

if ($action == 'updatePost') {
    echo "post to be updated";
} else {
    //require to delete post model
}
