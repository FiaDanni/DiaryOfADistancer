

<?php
include 'header.php';
?>

<body>
    <br>
    <div>
        <h3 class="updateblog">Update or Delete Blog Post</h3>
    </div>
    <br>
    <form action="../Controllers/postController.php" method="post">
        <div class="form-group" style='margin-top: 1%; margin-left: 25%;margin-right: 25%'>
            <h5 for="selectexistingblog">Select Existing Blog</h5>
            <select class="form-control" id="blogcategoryselected" size="8" name="PostID">
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

            <!--     </select>-->
        </div>

        <div style='margin-left: 25%; margin-right: 25%; margin-bottom: 5%; text-align:center;'>
            <button type="submit" class="btn btn-dark" style='margin:1px' name="action" value="update">Update</button>
            <button type="submit" class="btn btn-dark" style='margin: 1px' name="action" value="delete">Delete</button>
        </div>
    </form>
    
<?php
include 'footer.php';
 ?>
    
</body>


</html>