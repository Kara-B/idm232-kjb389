<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $a = 3;
        $b = 4;

        // example 1

        // if ($a > $b) {
        //     echo 'a is larger than b';
        // } elseif ($a < $b) {
        //     echo 'a is smaller than b';
        // } else {
        //     echo 'what the hell kind of number';
        // }

        // Example 2: Switch cases will run through everything in a case till it gets to one that meets the conditions. To prevent this, add a break. This can be used to check for variable equaling certain things, and using it to change variable to certain values
        // switch ($a) {
        //     case 0:
        //         echo 'a equals 0';
        //         break;
        //     case 1:
        //         echo 'a equal 1'
        //     case 3:
        //         echo 'a equals 3';
        // }

        // Example 3:

        // $count = 0;
        // while ($count <= 10) {
        //     echo $count;
        //     $count ++; //increases the count by 1 while the count is less than 10
        // }
            // Example 4: for for loops you'll list in a specific order: the variable.,the condition it needs to meet,what you want to happen after each loop
            // again, you can put if statments in these to check values and make things happen while its running through the loops
        // for ($count = 0; $count <= 10; $count++){
        //     echo $count . ', ';
        // }

            // Example 5: For each loops
        // $thearraythatyouwanttoloopthrough = [ a, cool, array, here];
        // foreach ($thearraythatyouwanttoloopthrough as $useforlogic){
        //     echo "Age: ${useforlogic}"
        // }

        // EX6: Creating and calling functions with php. You can put multiple variables to call within a function. You have to fill in the parameters when you call the function if you set them when setting the function.
        // You can't call a variable outside of a function within a function. If you do want to, write the word global $variablName and you can call it. Calling global is very situational, it's more common to pass $variableName in as an argument

        // function say_hi()
        // {
        //     echo 'Howdy Friend!';
        // }

        // function say_something_vulgar($swearWord)
        // {
        //     echo "Howdy $swearWord" ;
        // }

        // say_hi();
        // say_something_vulgar('Bitch!');

    ?> 



</body>
</html>