<?php
include 'header.php';

require_once '../Model/dbconfig.php';

    try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //Prepare the statement
    $statement = $pdo->prepare("SELECT posts.PostID, posts.Title, posts.Entry, posts.DateTime, categories.hashtag as categories
    FROM posts
    INNER JOIN categories
    ON posts.PostID=categories.POSTID 
    WHERE categories.hashtag='#Fitness' ORDER BY posts.DateTime DESC");
    //Execute the Statement
    $statement->execute();
    //Put statement into variable to processed by the HTML page
    
    $categories = $statement->fetchall(PDO::FETCH_OBJ);
    //var_dump($categories);
    $pdo = null;
    }
catch(PDOException $e)
    {
    echo $statement . "<br>" . $e->getMessage(). "<br>";
    }
    
    //var_dump($categories);
    
    $chunk = array_chunk($categories, 3);
    //print_r($chunk);
    
    require_once 'fitness_1.php';
    ?>

<br>
<div class="container-fluid">     
 <div class="card-columns"  style="width:100%; padding-right: 10%; padding-left: 10%;">   
     <?php foreach($categories as $category): ?>
     
  
      
  <div class="card" > 
        
    <img class="card-img-top" src="images/homejoe.jpg" height="200"  alt="Card image cap">
    <div class="card-body">
    <h6 class="card-title" a href="hompeage.php class="btn btn-primary stretched-link"><?= $category->Title; ?></h6>
    <!--<p class="card-text">My favourite crime dramas of the moment are as follows.</p>-->
    <a href="#" class="btn btn-dark stretched-link">Tell me more</a>
    </div>
  </div>
     <br>
      <?php endforeach; ?> 
  </div>
</div>
        
        
<!--  <div class="container">        
  <div class="card-deck" style= "width:100%; padding-left: 10%; padding-right: 10%;">
      
      <div class="card">
    <img class="card-img-top" src="images/yoga.jpg"  height="200"  alt="Card image cap">
    <div class="card-body">
    <h6 class="card-title">Yoga</h5>
    <p class="card-text">New releases at Home</p>
    <a href="homepage.php" class="btn btn-dark stretched-link">Tell me more</a>
    </div>
  </div>
      
      <div class="card">
    <img class="card-img-top" src="images/10mins.jpg" height="200"  alt="Card image cap">
    <div class="card-body">
    <h6 class="card-title">10mins cardio</h5>
    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    <a href="homepage.php" class="btn btn-dark stretched-link">Tell me more</a>
    </div>
  </div>
      
  <div class="card">
    <img class="card-img-top" src="images/20min.jpg" height="200" alt="Card image cap">
    <div class="card-body">
    <h6 class="card-title">20 mins cardio</h6>
    <p class="card-text"> This card has even longer content than the first to show that equal height action.</p>
    <a href="homepage.php" class="btn btn-dark stretched-link">Tell me more</a>
   </div>
  </div>
      
</div>  
  </div>-->

        
        
        
 
  
 <br>
 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>

