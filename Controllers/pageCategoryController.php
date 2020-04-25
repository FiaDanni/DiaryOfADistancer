<?php

if(isset($fitness)){ 
    $hashtag = '#fitness';
}
elseif(isset($music)){ 
   
    $hashtag = '#music';
}
elseif(isset($foodanddrink)){ 
   
    $hashtag = '#foodanddrink';
}
elseif(isset($entertainment)){ 
   
    $hashtag = '#entertainment';
}
else {
    $hashtag = '#mindandbody';
}