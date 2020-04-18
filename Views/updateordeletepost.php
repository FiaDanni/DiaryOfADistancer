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
<?php
include 'header.php';
?>

<body>
    <div>
        <h3>Update or Delete Blog Post</h3>
    </div>

    <form>
        <div class="form-group" style='margin-top: 1%; margin-left: 5%;margin-right: 5%'>
            <h5 for="selectexistingblog">Select Existing Blog</h5>
            <select class="form-control" id="blogcategoryselected" size="8">
                <?php
                require_once '../Model/dbconfig.php';
                try {
                    $conn = new PDO("mysql:host=localhost;dbname=$dbname", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $stmt = $conn->prepare("SELECT * FROM `posts`");
                    $stmt->execute();
                    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                    foreach ($stmt->fetchAll() as $k => $v) {
                        $title = $v['Title'];
                        $PostID = $v['PostID'];
                        echo "<option value=$PostID>$title</option>";
                    }
                    $conn = null;
                } catch (PDOException $pe) {
                    die("Could not connect to the database $dbname :" . $pe->getMessage());
                }
                ?>
            </select>
        </div>


        <div style='margin-left: 25%; margin-right: 25%; margin-bottom: 5%'>
            <button type="submit" class="btn btn-primary" style='margin:1px'>Update</button>
            <button type="submit" class="btn btn-primary" style='margin: 1px'>Delete</button>
        </div>
    </form>


</body>


</html>