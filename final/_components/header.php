<?php

// if $page_title variable doesn't exist, create a default one
if (!isset($page_title)) {
    $page_title = '🚨 Missing Title 🚨';
}
$site_title = 'Tasty Times';
$document_title = $page_title . ' | ' . $site_title; // Home | JAWN Clips

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo site_url(); ?>/dist/styles/style.css">
    <title><?php echo $document_title ; ?></title>
</head>


<body>

  <header> 
        <h2 class="menuItem"> <a href="https://www.karajbutler.com/idm232/final/_includes/add-recipe.php">Search</a> </h2>
        <h2 class="menuItem"> All Recipes </h2>
        <h2 class="menuItem menuSignIn"> Sign In </h2>
        <img  src=" <?php echo site_url(); ?>/dist/images/Tasty-Times-Logo.svg" alt="Tasty Times Logo" >
    </header>

      <!-- Main Content Begins -->