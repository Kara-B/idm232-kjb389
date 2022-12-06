
<?php

function add_recipe($recipe_name, $cook_time, $prep_time, $total_time, $serving_size, $description, $ingredients, $instructions, $image_path)
{
    global $db_connection;
    $query = 'INSERT INTO recipes';
    $query .= ' (recipe_name, cook_time, prep_time, total_time, serving_size, description, ingredients, instructions, image_path)';
    $query .= " VALUES ('$recipe_name', '$cook_time', '$prep_time', '$total_time', '$serving_size', '$description', '$ingredients', '$instructions', '$image_path')";
    $result = mysqli_query($db_connection, $query);
    return $result;
}


function get_recipes()
{
    global $db_connection;
    $query = 'SELECT * FROM services';
    $result = mysqli_query($db_connection, $query);
    $query = 'SELECT * FROM recipes ORDER BY title ASC';
    return $result;
}
?> 