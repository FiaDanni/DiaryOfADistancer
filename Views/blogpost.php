<?php
$PostID = $_GET['PostID'];
require_once '../Model/show_individual_post.php';
include 'header.php';
?>
<br>

<div class="container">
   <h1 class="blogp"><?= $Title ?></h1>
   
   <br>
   
   <h3 class="stamp">Published: <?php $timestamp = date_create($DateTime); echo date_format($timestamp, "d-M-Y H:i:s");?></h3>
   
</div>
<br>

<div class="container" style=" text-align: center">
  <img src="images/categoriesandhomepage/<?= $PostID ?>.jpg" alt="image of post"  width="500"> 
</div>
<br>

<div class="container">
      <p class="writing"><?= $Entry ?></p>
</div>
<br>

<?php
include 'footer.php';
?>