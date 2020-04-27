<?php

include 'header.php';
require_once '../Model/dbconfig.php';
require_once '../Model/all_blog_posts.php';

?>
         <div class="container" id="subtitle">
        <h1>Welcome to Our Blog</h1>
         </div>
<br>
    <div class="cont" align="center">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        
    <div class="carousel-item active">
        <img src="images/categoriesandhomepage/31.jpg" height="350px" width="60%" alt="Tiger">
      <div class="carousel-caption d-none d-md-block">
     <a href = "blogpost.php?PostID=31"><h5 class="five">The Wonderfully Weird Tiger King</h5></a>
      </div>
      
    </div>
    <div class="carousel-item">
        <img src="images/categoriesandhomepage/32.jpg" height="350px" width="60%"alt="Trees">
      <div class="carousel-caption d-none d-md-block">
       <a href="blogpost.php?PostID=32"><h5 class="five">Books to lift your mood</h5></a>
    </div>
    </div>
        
    <div class="carousel-item">
        <img src="images/categoriesandhomepage/33.jpg"height="350px" width="60%" alt="Bananas">
        <div class="carousel-caption d-none d-md-block">
            <a href="blogpost.php?PostID=33"><h5 class="five">The Banana Bread Phenomenon</h5></a>
       <!-- <p class="car">The new phenomenon,three ways.</p>-->
    </div>
    </div>
    </div>
        
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
    </a>
        
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
    </a>
    </div>
      
    </div>       
        
    <br>
        
          
    <br>
<div class="container-fluid">     
 <div class="card-columns"  style="width:100%; padding-right: 10%; padding-left: 10%;">   
     <?php foreach($posts as $post): ?>
     
      
  <div class="card" > 
        
      <img class="card-img-top" src="images/categoriesandhomepage/<?= $post->PostID; ?>.jpg" height="200"  alt="Card image cap">
    <div class="card-body">
        <h6 class="card-title" class="btn btn-primary stretched-link"> <?= $post->Title; ?></h6>
    <a href="blogpost.php?PostID=<?= $post->PostID; ?>" class="btn btn-dark stretched-link">Tell me more</a>
    <br>
    <p class="card-text"><small class="text-muted">Published: <?php $timestamp = date_create($post->DateTime); echo date_format($timestamp, "d-M-Y H:i:s");?></small></p>
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