<?php
include __DIR__ . '/../app.php';

if (!$_POST) {
    die('Unauthorized');
}

// Store $_POST data to variables for readability
$recipe_name_value = sanitize_value($_POST['recipe_name']);
$cook_time_value = sanitize_value($_POST['cook_time']);
$prep_time_value = sanitize_value($_POST['prep_time']);
$total_time_value = sanitize_value($_POST['total_time']);
$serving_size_value = sanitize_value($_POST['serving_size']);
$description_value = sanitize_value($_POST['description']);
$ingredients_value = sanitize_value($_POST['ingredients']);
$instructions_value = sanitize_value($_POST['instructions']);
$image_path_value = sanitize_value($_POST['image_path']);

$result = add_recipe(
    $recipe_name_value,
    $cook_time_value,
    $prep_time_value,
    $total_time_value, 
    $serving_size_value, 
    $description_value,
    $ingredients_value,
    $instructions_value,
    $image_path_value
);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin/recipes/index.php');
} else {
    $error_message = 'Sorry, there was an error creating the recipe';
    redirect_to('/admin/users?error=' . $error_message);
}

?>