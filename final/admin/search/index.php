<?php
  include_once __DIR__ . '/../../app.php';
  $page_title = 'Search';
  include_once __DIR__ . '/../../_components/header.php';




  // Check if search exist in query
  if (isset($_GET['search'])) {
      $search = $_GET['search'];
  } else {
      $search = '';
  }

  $query = 'SELECT *';
  $query .= ' FROM recipes';
  $query .= " WHERE recipe_name LIKE '%{$search}%'";
  $query .= " OR description LIKE '%{$search}%'";
  $query .= " OR ingredients LIKE '%{$search}%'";
  $results = mysqli_query($db_connection, $query);

  // Check if was have more than 0 results from db
  if ($results->num_rows > 0) {
      $recipes_results = true;
  } else {
      $recipes_results = false;
  }
?>


  <div>
    <div>
      <h1> Search Results </h1>
      <form action="<?php echo site_url(); ?>/admin/search" method="GET">
        <input type="text" name="search" id="search" placeholder="Search"
          value="<?php echo $search; ?>">
        <button type="submit">Search</button>
      </form>
      <h2>You searched for "<?php echo $search; ?>"</h2>
      <?php
      // If no results, echo no results
      if (!$recipes_results) {
          echo '<p>No results found</p>';
      }
      ?>


  <?php
  // If error query param exist, show error message
    if (isset($_GET['error'])) {
        echo '<p>' . $_GET['error'] . '</p>';
    }
  ?>


  <?php
    $site_url = site_url();
    if ($recipes_results) {
        while ($recipes_results = mysqli_fetch_assoc($results)) {
          echo "
          <a href='{$site_url}/recipeDetail.php?id={$recipes_results['id']}' >
              <div class=''>
              <img class='' width='100px' height='100px' src='{$site_url}{$recipes_results['image_path']}' alt=''>
                  <div class=''>
                      <p class=''>{$recipes_results['recipe_name']}</p>
                      <p class=''>{$recipes_results['description']}</p>
                  </div> 

              </div>
          </a>
      ";
        }
    }
  ?>
  </div>
</div>



<?php include_once __DIR__ . '/../../_components/footer.php';
?>