<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Test Website</title>
    </head>
    <body>
      <ul>
            <?php foreach($results as $result): ?>
            
          <li><b>Post ID</b>: <?= $result->PostID; ?> </li>
          <li><b>Title:</b> <?= $result->Title; ?> </li>
          <li><b>Entry:</b> <?= $result->Entry; ?> </li>
          <li><b>Date/Time:</b> <?= $result->DateTime; ?> </li>
          <br>
            <?php endforeach; ?>
            
        </ul>
        <ul>
         <?php foreach($categories as $music): ?>
            
          <li><b>Post ID</b>: <?= $music->PostID; ?> </li>
          <li><b>Title:</b> <?= $music->Title; ?> </li>
          <li><b>Entry:</b> <?= $music->Entry; ?> </li>
          <li><b>Date/Time:</b> <?= $music->DateTime; ?> </li>
          <li><b>Hashtag:</b> <?= $music->categories; ?> </li>
          <br>
            <?php endforeach; ?>
        </ul>
    </body>
</html>
