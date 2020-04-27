<?php
include 'header.php';
require_once '../Model/dbconfig.php';
$foodanddrink = true;
require_once '../Model/posts_by_categories.php';
    ?>
<div class="container" id="subtitle">
    <h1>Food & Drink</h1>
</div>
<br>
<div class="container-fluid">     
 <div class="card-columns"  style="width:100%; padding-right: 10%; padding-left: 10%;">   
     <?php foreach($categories as $category): ?>
     
      
  <div class="card" > 
        
      <img class="card-img-top" src="images/categoriesandhomepage/<?= $category->PostID; ?>.jpg" height="200"  alt="Card image cap">
    <div class="card-body">
    <h6 class="card-title" a href="hompeage.php" class="btn btn-primary stretched-link"><?= $category->Title; ?></h6>
    <a href="blogpost.php?PostID=<?= $category->PostID; ?>" class="btn btn-dark stretched-link">Tell me more</a>
    <br>
    <p class="card-text"><small class="text-muted">Published: <?php $timestamp = date_create($category->DateTime); echo date_format($timestamp, "d-M-Y H:i:s");?></small></p>
    </div>
  </div>
     <br>
      <?php endforeach; ?> 
  </div>
</div>
<br>
 
<?php
include 'footer.php';
 ?>

