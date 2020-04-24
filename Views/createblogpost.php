     <?php
      include 'header.php';
      ?>

     <body>
       <div>
         <h3>Create Your Blog Post</h3>

       </div>
       <form action="../Controllers/postController.php" method="post">
         <div class="form-group" style='margin-left: 5%; margin-right: 5%'>
           <h5 for="Blogposttitle">Blog Post Title</h5>
           <input name="Title" type="text" class="form-control" id="Blogposttitle" aria-describedby="BlogTitle" placeholder="Enter Blog Post Title" required>
           <small id="titlehelp" class="form-text text-muted">Think of something which will grab your reader's attention.</small>
         </div>
         <div class="form-group" style='margin: 5%'>
           <h5 for="blogtext">Please write your blog below</h5>
           <textarea name="Entry" class="form-control" id="exampleFormControlTextarea1" rows="10" placeholder="Start typing here" required></textarea>
         </div>

         <div class="form-group" style='margin: 5%'>
           <h5 for="selectblogcategory">Select Blog Catergories</h5>
           <select name="Hashtag" multiple class="form-control" id="blogcategoryselected">
             <option value='#Music'>Music</option>
             <option value='#Entertainment'>Entertainment</option>
             <option value='#MindandBody'>Mind and Body</option>
             <option value='FoodandDrink'>Food and Drink</option>
             <option value='Fitness'>Fitness</option>
           </select>
         </div>

         <h5>Click here to post your blog</h5>
         <div style='margin-left: 25%; margin-right: 25%; margin-bottom: 5%; text-align: center;'>
           <button type="submit" class="btn btn-dark" name="action" value="create">Post</button>
         </div>
       </form>



       <?php
        include 'footer.php';
        ?>
     </body>

     </html>