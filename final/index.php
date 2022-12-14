<?php
include_once __DIR__ . '/app.php';
$page_title = 'Home';
include_once __DIR__ . '/_components/header.php';
?>


    <div class="hero">
        <!-- <h1> Where Simple meets Fresh. </h1> -->
        <img  src=" <?php echo site_url(); ?>/dist/images/banh-mi-with-grilled-pork.jpg" alt="Tasty Times Banner" >
    </div> 


<h2 class="pageHeading"> Featured </h2>

    <div class="recipeSection"> 
        <div class="recipeCard">
            <img class="recipeImage" src="https://apleasantlittlekitchen.com/wp-content/uploads/2020/09/pizza-cut-1-of-1.jpg" alt="">
            <div class="recipeInfo">
                <h2 class="recipeName"> Burrata & Proscuitto Pizza with Basil </h2>
                <p class="rating"> ★★★★★  (40)</p>
            </div>
        </div>
        
            <div class="recipeCard">
                    
                <img class="recipeImage" src="<?php echo site_url(); ?>/dist/images/grilled-brie-mushroom-sandwich.jpg" alt="">
                <div class="recipeInfo">
                <h2 class="recipeName"> Mushroom & Brie Melt on Sourdough </h2>
                <p class="rating"> ★★★★★  (40)</p>
                </div>
            
            </div>

            <div class="recipeCard">   
                <img class="recipeImage" src="https://www.dinneratthezoo.com/wp-content/uploads/2017/11/caprese-skewers-4.jpg" alt="">
                <div class="recipeInfo">
                <h2 class="recipeName"> Caprese Skewers with Balsamic glaze </h2>
                <p class="rating"> ★★★★★  (40)</p>
                </div>
            
            </div>
            
            <div class="recipeCard">
                    
                <img class="recipeImage" src="https://www.sandravalvassori.com/wp-content/uploads/2021/10/butternut-squash-soup-7592.jpg" alt="">
                <div class="recipeInfo">
                <h2 class="recipeName"> Caprese Skewers with Balsamic glaze </h2>
                <p class="rating"> ★★★★★  (40)</p>
                </div>
            
            </div>
    </div>


    <form class="searchBox" action= "<?php echo site_url(); ?>/admin/search" method="GET">
        <div>
            <button class="searchButtonSec">
                Search
            </button>
            <input class="searchText" type="text" placeholder="Search..." name="search">
        </div>
    </form>



<?php include_once __DIR__ . '/_components/footer.php';