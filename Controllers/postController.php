<?php

if (!empty($_POST['PostID'])) {
    $postID = $_POST['PostID'];
}
$action = $_POST['action'];

if ($action == 'update') {
    session_start();
    $_SESSION["PostID"] = $postID;
    header('Location: http://localhost/Final/Views/updatePost.php');
}

if ($action == 'updatePost') {
    require '../Model/update_post.php';
    echo 'post updated';
}


if ($action == 'delete') {
    require_once '../Model/delete_post.php';

    //require to delete post model
}

if ($action == 'create') {

    $target_dir = '../Views/images/categoriesandhomepage/';
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    //     Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    //     Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    //     Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    //     Allow certain file formats
    if ($imageFileType != "jpg") {
        echo "Sorry, only JPG files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    require_once '../Model/create_blog_post.php';

    rename("$target_file", "../Views/images/categoriesandhomepage/$PostID.jpg");
    header("Location: http://localhost/Final/Views/blogpost.php?PostID=$PostID");
    die();
}
