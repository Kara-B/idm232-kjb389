<?php 
function site_url()
{
    $protocol = 'http';
    // Checks if the server is using HTTPS
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
        $protocol = 'https';
    }
    // Get current domain
    $domain = $_SERVER['HTTP_HOST'];
    // Merge it with the current path
    if ($domain === 'karajbutler.com') {
        return $protocol . '://' . $domain . '/idm232/final';
    } else {
        return $protocol . '://' . $domain . 'final';
    }
}

function project_path()
{
    $domain = $_SERVER['HTTP_HOST'];
    if ($domain === 'karajbutler.com') {
        return $_SERVER['DOCUMENT_ROOT'] . '/idm232/final';
    } else {
        return $_SERVER['DOCUMENT_ROOT'] . '/final';
    }
}

?>

<?php include_once 'header.php'; ?>

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

?>



<?php
$txt = "Assignment - 01";
echo "<h1> $txt </h1>";
?>     


<?php include_once 'footer.php'; ?>
