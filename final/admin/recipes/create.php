<?php

include_once __DIR__ . '/../../app.php';
$page_title = 'Add Recipe';
include_once __DIR__ . '/../../_components/header.php';
?>

<?php
// get users data from database
$query = 'SELECT * FROM s';
$result = mysqli_query($db_connection, $query);

?>

<div class="addRecipeForm">
<form action="<?php echo site_url(); ?>/_includes/process-create-recipe.php" method="POST">

    <h2 class="pageHeading"> Add A Recipe </h2>
    <div class="addrecipeInput">
        <label for=""> Recipe Name</label>
        <input class="userInput" type="text" name="recipe_name">
    </div>

    <div class="addrecipeInput">
        <label for=""> Cook Time</label>
        <input class="userInput" type="text" name="cook_time">
    </div>

    <div class="addrecipeInput">
        <label for=""> Prep Time</label>
        <input class="userInput" type="text" name="prep_time">
    </div>

    <div class="addrecipeInput">
        <label for=""> Total Time</label>
        <input class="userInput" type="text" name="total_time">
    </div>

    <div class="addrecipeInput">
        <label for=""> Serving Size</label>
        <input class="userInput" type="number" name="serving_size">
    </div>

    <div class="addrecipeInput">
        <label for=""> Description </label>
        <textarea class="js-tinymce" name="description"> </textarea>
    </div>

    <div class="addrecipeInput">
        <label for=""> Ingredients </label>
        <textarea class="js-tinymce" name="ingredients"></textarea>
    </div>

    <div class="addrecipeInput">
        <label for=""> Instructions </label>
        <textarea class="js-tinymce"  name="instructions"> </textarea>
    </div>

    <div class="addrecipeInput">
        <label for=""> Image </label>
        <input class="userInput" type="text" name="image_path" > /dist/images/recipe-images/ </input>
    </div>

    <input type="submit" value="Submit Recipe">
</form>

</div>


<?php include_once __DIR__ . '/../../_components/footer.php' ;
?>


