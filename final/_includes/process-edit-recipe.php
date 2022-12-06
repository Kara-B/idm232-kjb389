<?php
include __DIR__ . '/../app.php';

if (!$_POST) {
    die('Unauthorized');
}

// Store $_POST data to variables for readability

$id = $_POST['id'];
$recipe_name_value = sanitize_value($_POST['recipe_name']);
$cook_time_value = sanitize_value($_POST['cook_time']);
$prep_time_value = sanitize_value($_POST['prep_time']);
$total_time_value = sanitize_value($_POST['total_time']);
$serving_size_value = sanitize_value($_POST['serving_size']);
$description_value = sanitize_value($_POST['description']);
$ingredients_value = sanitize_value($_POST['ingredients']);
$instructions_value = sanitize_value($_POST['instructions']);
$image_path_value = sanitize_value($_POST['image_path']);



// Create a SQL statement to insert the data into the database
$query = "UPDATE recipes SET
     recipe_name = '{$recipe_name_value}', 
     cook_time = '{$cook_time_value}', 
     prep_time = '{$prep_time_value}',
     total_time = '{$total_time_value}', 
     serving_size = '{$serving_size_value}',
     description = '{$description_value}', 
     ingredients = '{$ingredients_value}', 
     instructions = '{$instructions_value}',
     image_path = '{$image_path_value}'
WHERE id = {$id}";

// Run the SQL statement
$result = mysqli_query($db_connection, $query);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin/recipes/index.php');
} else {
    $error_message = 'recipe was not updated';
    redirect_to('/admin/recipes?error=' . $error_message);
}