
<?php

function add_recipe($recipe_name, $cook_time, $prep_time, $total_time, $serving_size, $description, $ingredients, $instructions)
{
    global $db_connection;
    $query = 'INSERT INTO recipes';
    $query .= ' (recipe_name, cook_time, prep_time, total_time, serving_size, description, ingredients, instructions)';
    $query .= " VALUES ('$recipe_name', '$cook_time', '$prep_time', '$total_time', '$serving_size', '$description', '$ingredients', '$instructions')";
    $result = mysqli_query($db_connection, $query);
    return $result;
}

?> 



