
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Diary of a Distancer.</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="diaryofad.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
    </head>
        
        
   <?php
    include 'header.php';
    ?>
    <body>
    <div>
        <h3>Create Your Blog Post</h3>   
        
    </div>
    <form>
  <div class="form-group" style='margin-left: 5%; margin-right: 5%'>
    <h5 for="Blogposttitle">Blog Post Title</h5>
    <input type="text" class="form-control" id="Blogposttitle" aria-describedby="BlogTitle" placeholder="Enter Blog Post Title">
    <small id="titlehelp" class="form-text text-muted">Think of something which will grab your reader's attention.</small>
  </div>
        <div class="form-group" style='margin: 5%'>     
    <h5 for="blogtext">Please write your blog below</h5>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" placeholder="Start typing here"></textarea>
  </div>
  
     <div class="form-group" style='margin: 5%'>
    <h5 for="selectblogcategory">Select Blog Catergories</h5>
    <select multiple class="form-control" id="blogcategoryselected">
      <option value='1'>Music</option>
      <option value='2'>Entertainment</option>
      <option value='3'>Mind and Body</option>
      <option value='4'>Food and Drink</option>
      <option value='5'>Fitness</option>
    </select>
  </div>
        
 <h5>Click here to post your blog</h5>
 <div style='margin-left: 25%; margin-right: 25%; margin-bottom: 5%'>
  <button type="submit" class="btn btn-primary">Post</button>
  </div>
</form>
    
    
        
        
    </body>    
        
 </html>

