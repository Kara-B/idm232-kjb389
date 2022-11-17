<?php
include_once __DIR__ . '/../../app.php';
$page_title = 'All Recipes';
include_once __DIR__ . '/../../_components/header.php';
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
$query = 'SELECT * FROM recipes';
$result = mysqli_query($db_connection, $query);

?>





<div class="adminBody">

  <div class="adminViewAll">
    <div class="adminViewAll_TopSec">
      <div class="header center">
        <h1>All Recipes</h1>
        <hr>
      </div>


      <button class="addRecipeButton">  Add a Recipe <img class="addRecipeIcon" src=" <?php echo site_url(); ?>/dist/images/plus_circle_outline.svg"> </button>

      <form action="" method="GET">
        <input type="text" name = "Search">
        <button type="submit"> Search </button> 

      </form>

    <div class="adminTable">
      <!-- <div class="">
        <div class=""> -->
          <div class="">
            <table class="">
              <thead class="">
                <!-- <tr>
                  <th scope="col" class="">Name of Recipe</th>
                </tr> -->
              </thead>
              <tbody class="">
                <?php
                 $site_url = site_url();
                  while ($recipes = mysqli_fetch_array($result)) {
                    echo "<tr>
                      <td class='recipeName'>{$recipes['recipe_name']}</td>
                      <td class='recipeButtons'>
                        <a href='{$site_url}/admin/recipes/edit.php?id={$recipes['id']}' class=''>Edit</a>
                        <a href='{$site_url}/admin/recipes/delete.php?id={$recipes['id']}' class=''>Delete</a>
                      </td>
                    </tr>";
                  }
                 ?>
              </tbody>
            </table>
          </div>
        <!-- </div>
      </div> -->
    </div>
  </div>
 
</div>


<?php include_once __DIR__ . '/../../_components/footer.php'; ?>

