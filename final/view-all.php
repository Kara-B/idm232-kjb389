<?php
// Make sure the path is correct for each include on this page. Delete this comment once done
include_once __DIR__ . '/app.php';
$page_title = 'All Recipes';
include_once __DIR__ . '/_components/header.php';
?>

<?php
// get data from database

$query = 'SELECT * FROM recipes ORDER BY recipe_name ASC';
$result = mysqli_query($db_connection, $query);

?>



     <h2 class="pageHeading">All Recipes</h2>
     
    <div class="allGrid">
        <?php include __DIR__ . '/_components/recipeCards.php'; ?>
    </div>



<?php include_once __DIR__ . '/_components/footer.php';