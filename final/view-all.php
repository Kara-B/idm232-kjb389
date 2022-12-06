<?php
// Make sure the path is correct for each include on this page. Delete this comment once done
include_once DIR . '/app.php';
$page_title = 'All Recipes';
include_once DIR . '/_components/header.php';
?>

<?php
// get data from database

$query = 'SELECT * FROM recipes ORDER BY recipe_name ASC';
$result = mysqli_query($db_connection, $query);

?>



    <div class="">
        <h1 class="">All Recipes</h1>
    </div>


<div class="">
    <div class="">
        <?php include DIR . '../_components/recipeCards.php'; ?>
    </div>
</div>


<?php include_once DIR . '/_components/footer.php';