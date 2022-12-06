<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet"> 
    <title>Tasty Times: Recipe Details </title>
</head>
<body>
    <header> 
        <h2 class="menuItem"> Search </h2>
        <h2 class="menuItem"> All Recipes </h2>
        <h2 class="menuItem menuSignIn"> Sign In </h2>
        <img class="headerLogo" src="images/Tasty-Times-Logo.svg">
    </header>


    <main>
        <div class="recipeTop">
            <img class="recipeDescriptionImage" src="images/pizza-with-burrata.jpg">
            <div class="recipeStats">
                <h2 class=''>{$recipe['recipe_name']}</h2>
                <h3> ★★★★  (40) </h3>
                <h4> Prep Time: {$recipe['prep_time']} </h4>
                <h4> Cook Time: {$recipe['cook_time']} </h4>
                <h4> Total Time: {$recipe['total_time']} </h4>
                <h4> Serves: {$recipe['serving_size']} </h4>
                <p class="recipeDescription"> {$recipe['description']}</p>
            </div>

        </div>

        <div class="recipeMiddle">
            <div class="recipeIngredients">
                <h4> Ingredients:</h4>
                <p class=''>{$recipe['ingredients']}</p>
                   
            </div>
            <div class="recipeInstructions"> 
                <h2> Instructions </h2>
                <p class=''>{$recipe['directions']}</p>
            </div>
            
        </div>
       


    </main>
    <footer>
        <img class="footerLogo" src="images/Tasty-Times-Logo.svg">
        <p> &copy; 2022 Tasty Time co. </p>
    </footer>

</body>
</html>