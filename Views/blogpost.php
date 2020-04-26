<?php
$PostID = $_GET['PostID'];
require_once '../Model/show_individual_post.php';
include 'header.php';
?>
<br>

<div>
   <h1 class="blogp"><?= $Title ?></h1>

   <br>
   

   <p class="writing"><?= $Entry ?></p>
   <br>
   
 <h3 class="stamp">Published: <?= $DateTime ?></h3>
 


<br>
</div>

<?php
include 'footer.php';
?>