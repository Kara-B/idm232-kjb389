<?php
// Make sure the path is correct for each include on this page. Delete this comment once done
include_once __DIR__ . '/app.php';
$page_title = 'View Recipe';
include_once __DIR__ . '/_components/header.php';
?>


<?php
// get recipe data from database
$query = "SELECT * FROM recipes WHERE id = {$_GET['id']}";
$result = mysqli_query($db_connection, $query);

?> 


<?php
if (!isset($result)) {
    echo '$recipes variable is not defined. Please check the code.';
}
?>

<?php
    $site_url = site_url();
    while ($recipes = mysqli_fetch_array($result)) {
        echo "
        <div class='recipeTop'>

        <img class='recipeDescriptionImage' src='{$site_url}{$recipes['image_path']}' alt='recipe image'>
            <div class='recipeStats'>
                <h2 class=''>{$recipes['recipe_name']}</h2>
                <h4> Prep Time: {$recipes['prep_time']} </h4>
                <h4> Cook Time: {$recipes['cook_time']} </h4>
                <h4> Total Time: {$recipes['total_time']} </h4>
                <h4> Serves: {$recipes['serving_size']} </h4>
                <p class='recipeDescription'> {$recipes['description']}</p>
            </div>

        </div>

        <div class='recipeMiddle'>
            <div class='recipeIngredients'>
                <h4> Ingredients:</h4>
                <p class=''>{$recipes['ingredients']}</p>
                   
            </div>
            <div class='recipeInstructions'> 
                <h2> Instructions </h2>
                <p class=''>{$recipes['instructions']}</p>
            </div>
            
        </div>
       
        ";
    }
?>



<?php include_once __DIR__ . '/_components/footer.php';
