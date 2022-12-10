<?php
include_once __DIR__ . '/../../app.php';
$page_title = 'All Recipes';
include_once __DIR__ . '/../../_components/header.php';

$recipes = get_recipes();

?>

<!-- <h2 class="pageHeading"> All Recipes </h2>

<button class="addRecipeButton"> Add a Recipe <img class="addRecipeIcon" src=" <?php echo site_url(); ?>/dist/images/plus_circle_outline.svg"> </button>


<div class="allRecipesBlock">

    <div class="allRecipesImagediv">
        <img class="allRecipesImage" src="https://apleasantlittlekitchen.com/wp-content/uploads/2020/09/pizza-cut-1-of-1.jpg" >
    </div>

    <div class="allRecipesInfo">
        <h2 class="allRecipesName"> Burrata & Proscuitto Pizza with Basil </h2>
        <p class="allRecipesRating"> ★★★★★  (40)</p>
        <p class="allRecipesDescription"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet, velit dignissimos sapiente veritatis modi corporis nihil at aspernatur quia, quaerat, ipsa voluptatum atque dicta enim. Dolores, impedit ipsam? Non, numquam.</p>
    </div>
</div> -->



<?php
// get users data from database
// $query = 'SELECT * FROM recipes';
// $result = mysqli_query($db_connection, $query);
$query = 'SELECT * FROM recipes ORDER BY recipe_name ASC';
$result = mysqli_query($db_connection, $query);
?>





<div class="adminBody">


  <div class="header center">
    <h2 class="pageHeading"> All Recipes </h2>
    <hr>
  </div>


  <a href='https://www.karajbutler.com/idm232/final/admin/recipes/create.php'> <button class="addRecipeButton">  Add a Recipe <img class="addRecipeIcon" src=" <?php echo site_url(); ?>/dist/images/plus_circle_outline.svg"> </button></a>

  <form class="searchBox" action= "<?php echo site_url(); ?>/admin/search" method="GET">
        <div>
            <button class="searchButtonSec">
            <iconify-icon class="iconifyBs" icon="cil:magnifying-glass" width="30" height="30"></iconify-icon>
            </button>
            <input class="searchText" type="text" placeholder="Search..." name="search">
        </div>
  </form>
    


  <div class="recipeTable">
  <div>
    <table>
      <tbody>
        <?php
          $site_url = site_url();
          while ($recipes = mysqli_fetch_array($result)) {
            echo "
            <tr class='allRecipesBlock'>
              <td class='allRecipesImage'> <img src='{$site_url}/{$recipes['image_path']}' width='200px' height='150px' alt=''> </td> 
              <td class='allRecipesName'>{$recipes['recipe_name']}</td>
              <td class='allRecipesDescription'>{$recipes['description']} </td> 
              <td class='allRecipesButtons'>
                <a href='{$site_url}/admin/recipes/edit.php?id={$recipes['id']}'> <img src='/final/dist/images/edit-icon.svg'></a>
                <a href='{$site_url}/admin/recipes/delete.php?id={$recipes['id']}'> <img src='/final/dist/images/delete-icon.svg'></a>
              </td>
            </tr>
            ";

          }
          ?>
      </tbody>
    </table>
  </div>

</div>


<?php include_once __DIR__ . '/../../_components/footer.php'; ?>

