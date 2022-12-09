<?php
if (!isset($result)) {
    echo '$recipes variable is not defined. Please check the code.';
}
?>

<?php
    $site_url = site_url();
    while ($recipe = mysqli_fetch_array($result)) {
        echo "
        <div>
          
           
                    <a href='{$site_url}/recipeDetail.php?id={$recipe['id']}' class='recipeTemplate'>
                    <img class='recipeTemplateImage' width='100px' height='100px' src='{$site_url}{$recipe['image_path']}' alt=''>
                    <p class='recipeTemplateName'>{$recipe['recipe_name']}</p>
                    <p class=' recipeTemplateDescription'>{$recipe['description']}</p>
                    </a>
            
         
        </div>
        
        ";
    }
?>