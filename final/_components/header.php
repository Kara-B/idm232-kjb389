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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="<?php echo site_url(); ?>/dist/styles/style.css">
    <title><?php echo $document_title ; ?></title>
    <link rel="icon" href="<?php echo site_url(); ?>/dist/images/favicon.ico">
</head>

<body>

  <header> 
            <h2 class="menuItem"> <a href="https://www.karajbutler.com/idm232/final/admin/search/index.php">Search</a> </h2>
            <h2 class="menuItem"> <a href="https://www.karajbutler.com/idm232/final/view-all.php">All Recipes</a>  </h2>
            <h2 class="menuItem menuSignIn"> <a href="https://www.karajbutler.com/idm232/final/admin/recipes/index.php">Admin </a></h2>
            <a href="https://www.karajbutler.com/idm232/final/"> <img class="headerLogo" src=" <?php echo site_url(); ?>/dist/images/Tasty-Times-Logo.svg" alt="Tasty Times Logo" > </a> 
    </header>

      <!-- Main Content Begins -->