<?php

// var_dump($_POST);

// echo $_POST ['firstName'];

// echo $_POST ['lastName'];
function redirect_to($location){

    header('Location: ' . $location);
    exit;
}

header('Location: google.com');

?>