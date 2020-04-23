<?php
$PostID = $_GET['PostID'];
require_once '../Model/show_individual_post.php';
include 'header.php';
?>

<div>

   <h1><?= $Title ?></h1>
   <h3>Published: <?= $DateTime ?></h3>
   <p><?= $Entry ?></hp>

</div>

<?php
include 'footer.php';
?>