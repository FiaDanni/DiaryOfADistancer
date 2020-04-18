<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Diary of a Distancer.</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="diaryofad.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
</head>
<?php include 'header.php'; ?>

<body>
    <h1>Update</h1>

    <form action="../Controllers/postController.php" method="post">
        <?php
        require_once '../Model/dbconfig.php';
        $PostID = $_SESSION["PostID"];
        try {
            $conn = new PDO("mysql:host=localhost;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT * FROM `posts` WHERE `PostID`=$PostID");
            $stmt->execute();
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            foreach ($stmt->fetchAll() as $k => $v) {
                $Title = $v['Title'];
                $Entry = $v['Entry'];
                $PostID = $v['PostID'];
                echo "<input type='hidden' name='PostID' value=$PostID>";
                echo "<div class='form-group'>";
                echo "<label for='blog_title'>Title</label>";
                echo "<input type='text' class='form-control' id='blog_title' placeholder='$Title' name='Title'>";
                echo "</div>";

                echo "<div class='form-group'>";
                echo "<label for='blog_entry'>Entry</label>";
                echo "<textarea class='form-control' id='blog_entry' rows='7' name='Entry'>$Entry</textarea>";
                echo "</div>";
            }
            $conn = null;
        } catch (PDOException $pe) {
            die("Could not connect to the database $dbname :" . $pe->getMessage());
        }
        ?>
        <div class='form-group'>
            <label for='category'>Category</label>
            <select class="form-control">
                <?php
                try {
                    $conn = new PDO("mysql:host=localhost;dbname=$dbname", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $stmt = $conn->prepare("SELECT * FROM `categories` LIMIT 5");
                    $stmt->execute();
                    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                    foreach ($stmt->fetchAll() as $k => $v) {
                        $hashtag = $v['Hashtag'];
                        echo "<option value=$hashtag>$hashtag</option>";
                    }
                    $conn = null;
                } catch (PDOException $pe) {
                    die("Could not connect to the database $dbname :" . $pe->getMessage());
                }
                ?>
            </select>
        </div>


        <button type="submit" class="btn btn-primary" name="action" value="updatePost">Update</button>

    </form>

</body>

</html>