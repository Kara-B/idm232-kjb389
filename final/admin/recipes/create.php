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
        <input type="text" name="recipe_name">
    </div>

    <div class="addrecipeInput">
        <label for=""> Cook Time</label>
        <input type="text" name="cook_time">
    </div>

    <div class="addrecipeInput">
        <label for=""> Prep Time</label>
        <input type="text" name="prep_time">
    </div>

    <div class="addrecipeInput">
        <label for=""> Total Time</label>
        <input type="text" name="total_time">
    </div>

    <div class="addrecipeInput">
        <label for=""> Serving Size</label>
        <input type="number" name="serving_size">
    </div>

    <div class="addrecipeInput js-tinymce">
        <label for=""> Description </label>
        <textarea type="text" name="description"> </textarea>
    </div>

    <div class="addrecipeInput js-tinymce">
        <label for=""> Ingredients </label>
        <input type="text" name="ingredients">
    </div>

    <div class="addrecipeInput js-tinymce">
        <label for=""> Instructions </label>
        <input type="text" name="instructions">
    </div>
    <input type="submit" value="Submit Recipe">
</form>

</div>


<?php include_once __DIR__ . '/../../_components/footer.php';


