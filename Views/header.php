<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Diary of a Distancer</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="diaryofad.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
    
    <style> 
       nav {
            text-align: center;
        }
        
        h2{
            text-align:center;
            font-size:90px;
            font-family: 'Amatic Sc', cursive;
            padding-top:40px;
        }
        
       h1{
            font-family: 'Amatic Sc', cursive;
            font-weight:bold;
            font-size: 60px;
        }
        
      a{
            color:black;
            text-decoration: none;
        }
        
        a:link {
        text-decoration: none;
        }
        
        a:hover{
        font-weight: bold;
        color:black;
        }

        
        header{
            padding-bottom: 30px;
        }
        
        .fa {
        padding-top: 10px;
        padding-right: 20px;
        font-size: 20px;
        width: 30px;
        text-align: right;
        text-decoration: none;
        float:right;
        }

      .fa:hover {
      opacity: 0.7;
      }
      
.dropdown {
 position:absolute;
 top:5px;
 padding-left:0px;
}

.dropdown .dropbtn {
  cursor: pointer;
  font-size: 12px;  
  border: none;
  outline: none;
  color: white;
  background-color: black;
  font-family: inherit;
  margin: 5px;
  border:solid;
  border-radius:20px;
}

.navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
  font-weight:bold;
  
}

.dropdown-content {
  display: none;
  position: absolute;
  color:black;
  min-width: 170px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.show {
  display: block;
}



        </style>
        
    </head>
    <body>
        

<header>
    
    
 
    
    
            <a href="https://www.facebook.com" class="fa fa-facebook"></a>
            <a href="https://www.twitter.com" class="fa fa-twitter"></a>
            <a href="https://www.instagram.com" class="fa fa-instagram"></a>
            <a href="https://www.linkedin.com" class="fa fa-linkedin"></a>
      
            
            <h2><a href="homepage.php">Diary of a Distancer.</a></h2>       
            
            
            
            
            
           <nav>
           <a href="about.php">About &emsp;</a>
           <a href="music.php">Music &emsp;</a>
           <a href="entertainment.php">Entertainment &emsp;</a>
           <a href="mindandbody.php">Mind & Body &emsp;</a>
           <a href="foodanddrink.php">Food & Drink &emsp;</a>
           <a href="fitness.php">Fitness &emsp;</a>
           <a href="contact.php">Contact</a>
           </nav> 
            <br>
    <div id="container"></div>
   <div class="dropdown">
  <button class="dropbtn" onclick="myFunction()">Manage Blog Posts
  </button>
  <div class="dropdown-content" id="myDropdown">
    <a href="createblogpost.php">Create Blog Post</a>
    <a href="updateordeletepost.php">Update Blog Post</a>
    <a href="updateordeletepost.php">Delete Blog Post</a>
    
            
     
<script>
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
</script>

    
        </header>  

