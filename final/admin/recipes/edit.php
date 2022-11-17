<?php

include_once __DIR__ . '/../../app.php';
$page_title = 'Edit Recipe';
include_once __DIR__ . '/../../_components/header.php';
?>



<?php
// get recipe data from database
$query = "SELECT * FROM recipes WHERE id = {$_GET['id']}";
// recipe_name = {$_GET['$recipe_name']}";
$result = mysqli_query($db_connection, $query);
if ($result->num_rows > 0) {
    // Get row from results and assign to $id variable;
    $recipes = mysqli_fetch_assoc($result);
} else {
    $error_message = 'Recipe does not exist';
    // redirect_to('/admin/users?error=' . $error_message);
}

?> 

<div>
    <div>
        <h2 class="pageHeading"> Edit Recipe </h2>
    </div>
    <div>
        <form action="<?php echo site_url(); ?>/_includes/process-edit-recipe.php" method="POST">

            <div class="addrecipeInput">
                <label for="">Recipe Name</label>
                <input type="text" name="recipe_name"
                    value="<?php echo $recipes['recipe_name']; ?>">
            </div>

            <div class="addrecipeInput">
                <label for="">Cook Time</label>
                <input type="text" name="cook_time"
                    value="<?php echo $recipes['cook_time']; ?>">
            </div>

            <div class="addrecipeInput">
                <label for="">Prep Time</label>
                <input type="text" name="prep_time"
                    value="<?php echo $recipes['prep_time']; ?>">
            </div>

            <div class="addrecipeInput">
                <label for=""> Total Time</label>
                <input type="text" name="total_time"
                    value="<?php echo $recipes['total_time']; ?>">
            </div>

            <div class="addrecipeInput">
                <label for="">Servings</label>
                <input type="text" name="serving_size"
                    value="<?php echo $recipes['serving_size']; ?>">
            </div>

            <div class="addrecipeInput">
                <label for="">Description</label>
                <input type="text" name="description"
                    value="<?php echo $recipes['description']; ?>">
            </div>

            <div class="addrecipeInput">
                <label for="">Ingredients</label>
                <input type="text" name="ingredients"
                    value="<?php echo $recipes['ingredients']; ?>">
            </div>

            <div class="addrecipeInput">
                <label for="">Instructions</label>
                <input type="text" name="instructions"
                    value="<?php echo $recipes['instructions']; ?>">
            </div>

            <input type="submit" value="Update">

            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
        </form>
        
    </div>
</div>



<?php include_once __DIR__ . '/../../_components/footer.php';

