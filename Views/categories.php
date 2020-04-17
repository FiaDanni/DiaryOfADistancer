<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <h1>Assign Category to blog post / Create field in category table</h1>
    <form action="../Controllers/categoryController.php" method="post">
        <input type="hidden" name="category" value="create" />
        <label>Blog Post ID</label>
        <input name="PostID" type="number" required />
        <label>Category</label>
        <select id="cars" name="Hashtag">
            <option value="#Music">Music</option>
            <option value="#Entertainment">Entertainment</option>
            <option value="#MindandBody">Mind and body</option>
            <option value="#FoodandDrink">Food and drink</option>
            <option value="#Fitness">Fitness</option>
        </select>
        <button type="submit">Submit</button>
    </form>
    <br />

    <?php
    // put your code here
    ?>
</body>

</html>