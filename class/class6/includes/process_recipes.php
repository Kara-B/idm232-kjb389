<?php
// step 1: connect to the database

$db_host ='localhost';
$db_user ='root';
$db_pass ='root';
$db_name ='local_tastytimes';

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// check for errors

if (mysqli_connect_errno()) {
    die('Database connection failed ' . mysqli_connect_error() . 
    '(' . mysqli_connect_errno() . '()' 
);
}

// Reads the data from the users table database

$query = 'SELECT * FROM users';
$result = mysqli_query($connection, $query);

check for more errors
if(!$result){
    die('Database query failed.');
}

// What

while ($row = mysqli_fetch_array($result)) {
    var_dump($row);

}

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];

$query = "INSERT INTO users (first_name, last_name) VALUES ('$first_name', '$last_name')";
$query_results = mysqli_query($connection, $query)

?>

