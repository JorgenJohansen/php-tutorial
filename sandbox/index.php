<?php
    //constants
    // define('NAME','Jørgen');
    // //variables
    // $age = 28;
    // $name = "Jørgen";

    // $stringOne = "My email is ";
    // $stringTwo = "jorgen@easyatwork.com";

    // //concatination with dot
    // // echo $stringOne . $stringTwo;

    // $name = "Mario";

    //String interpolation
    // echo "Hey my name is $name";

    // echo "the ninja screamed \"Whaaa\"";
    // echo 'the ninja screamed "Whaaa!"';

    //String operations

    // echo $name[strlen($name)-1];
    // echo strlen($name);

    // echo strtolower($name);
    // echo str_replace('M','W', $name);

    // Floats/Doubles
    // $radius = 25;
    // $pi = 3.14;

    //Basic operations

    // echo $pi * $radius**2;

    // order of operations (Brackets Ideces Division Multiplication Addition Subtraction)

    // echo 2 * (4 + 9) / 3;

    //increment & decrement operators
    // echo --$radius;
    // echo ++$radius;''


    //Shorthand operators

    // $age = 20;

    // $age += 10;
    // echo "$age \n";
    // $age -= 10;
    // echo "\n" . $age;
    // $age *= 10;
    // echo $age . "\n";
    // $age /= 10;
    // echo $age;

    // number functions

    // echo floor($pi);
    // echo ceil($pi);
    // echo pi();

    // indexed arrays

    // $peopleOne = ['Jørgen','Høkken','Horge'];
    // $peopleTwo = array('ken','chun-li');
    // $ages = [20, 30, 40, 50];
    // $ages[1] = 25;
    // $ages[] = 60;

    // array_push($ages, 70);
    // // array_pop($ages);

    // // echo $peopleOne[2];
    // // echo $peopleTwo[1];

    // // print_r($ages);
    // // echo count($ages);

    // $peopleThree = array_merge($peopleOne, $peopleTwo);
    // // print_r($peopleThree);



    // // associative arrays key,value pairs, basically en hashmap/dictionary
    // $ninjasOne = ['jørgen'=>'black','mario'=>'orange','luigi'=>'brown'];

    // // echo $ninjaOne['jørgen'];
    // // print_r($ninjasOne);

    // $ninjasTwo = array('bowser'=>'green','peach'=>'yellow');
    // // print_r($ninjasTwo);

    // $ninjasTwo['peach'] = 'pink';
    // // print_r($ninjasTwo);

    // // echo count($ninjasOne);

    // $ninjasThree = array_merge($ninjasOne,$ninjasTwo);
    // // print_r($ninjasThree);

    // // multidimensional arrays
    // $blogs = [
    //     [
    //         'title' => 'mario party',
    //         'author' => 'mario',
    //         'content' => 'lorem', 
    //         'likes' => 30
    //     ],
    //     [
    //         'title' => 'mario kart cheats',
    //         'author' => 'toad',
    //         'content' => 'lorem', 
    //         'likes' => 25
    //     ],
    //     [
    //         'title' => 'yelda hidden chests',
    //         'author' => 'link',
    //         'content' => 'lorem', 
    //         'likes' => 50
    //     ],
    // ];

    // // print_r($blogs[2]['author']);

    // $blogs[] = ['title' => 'castle party', 'author' => 'peach', 'content' => 'lorem', 'likes' => 100];
    // // echo count($blogs);
    // // print_r($blogs[3]);
    // $popped = array_pop($blogs);

    // // print_r($popped);

    // // for($i = 0; $i < 10000; $i++){
    // //     echo "lorem ipsum \n";
    // // }

    // $ninjas = ['jørgen','ryu','yoshi'];

    // // for($i = 0; $i < count($ninjas); $i++){
    // //     echo  "<h1>$ninjas[$i]</h1>" . '<br / >';
    // // }

    // // foreach($ninjas as $ninja){
    // //     echo  "<h1>$ninja</h1>" . '<br / >';
    // // }

    // $products = [
	// 	['name' => 'shiny star', 'price' => 20],
	// 	['name' => 'green shell', 'price' => 10],
	// 	['name' => 'red shell', 'price' => 15],
	// 	['name' => 'gold coin', 'price' => 5],
	// 	['name' => 'lightning bolt', 'price' => 40],
	// 	['name' => 'banana skin', 'price' => 2]
	// ];

    // foreach($products as $product){
    //     $name = $product['name'];
    //     $price = $product['price'];
    //     echo "<h2>$name</h2>" . " - " . "<h3>$price<h3>" . '<br />';
    // }
    // $i = 0;
    // while($i < count($products)){
    //     // print_r($products[$i]['name'] . '<br />');
    //     echo($products[$i]['name'] . '<br />');
    //     $i++;
    // }
    //Booleans
    // echo true; "1"
    // echo false; ""
    
    //numbers
    // echo 5 < 10;
    // echo 5 > 10;
    //loose comparison: ==
    // echo 5 == 10;
    // echo 5 != 10;
    // echo 5 <= 5;

    //loose vs strict equal comparison

    //echo 5 == '5'; //loose equality
    echo 5 === '5'; // strict equality

    //conditional statements

    $price = 20;

    // if($price < 10){
    //     echo 'the condition is met';
    // }elseif($price <  30){
    //     echo 'else if condition is met';
    // }else{
    //     echo 'condition not met';
    // }

    // $products = [
    //     ['name' => 'shiny star', 'price' => 20],
    //     ['name' => 'green shell', 'price' => 10],
    //     ['name' => 'red shell', 'price' => 15],
    //     ['name' => 'gold coin', 'price' => 5],
    //     ['name' => 'lightning bolt', 'price' => 40],
    //     ['name' => 'banana skin', 'price' => 2]
    // ];

    // foreach($products as $product){
    //     // if($product['price'] < 15 && $product['price'] > 2){
    //     //     echo $product['name'] . "<br />";
    //     // }
    //     if($product['price'] > 20 || $product['price'] < 10){
    //         echo $product['name'] . "<br />";
    //     }
    // }
    // foreach($products as $product){
    //     if($product['name'] === 'lightning bolt'){
    //         break;
    //     }
    //     if($product['price'] > 15){
    //         continue;
    //     }
    //     echo $product['name'] . '<br/>';
    // }

    // Functions

    // $products = [
    //     ['name' => 'shiny star', 'price' => 20],
    //     ['name' => 'green shell', 'price' => 10],
    //     ['name' => 'red shell', 'price' => 15],
    //     ['name' => 'gold coin', 'price' => 5],
    //     ['name' => 'lightning bolt', 'price' => 40],
    //     ['name' => 'banana skin', 'price' => 2]
    // ];

    // function greeting($name='Jørgen', $time='morning'){
    //     echo "Good $time $name!";
    // }

    // // greeting('Høkken');
    // greeting('Høkken','Night');

    // function formatProduct($product){
    //     // echo "{$product['name']} costs NOK {$product['price']} to buy <br />";
    //     return "{$product['name']} costs NOK {$product['price']} to buy <br />";
    // }

    // $formatted = formatProduct(['name' => 'shiny star', 'price' => 20]);
    // echo $formatted;
    //scopes
    
    // $name = "Jørgen";
    // // function greeting(){
    // //     global $name;
    // //     $name = 'Høkken';
    // //     echo "Hello $name";
    // // }

    // // greeting();
    // // echo $name;
    // //& pass by reference
    // function sayBye(&$name){
    //     $name = 'Høkken';
    //     echo "bye $name";
    // }

    // sayBye($name);
    // echo $name;

    //Include continues with the errors while require stops
    // include('ninjas.php');
    // require('ninjas.php');
    // include('ninjass.php');
    // require('ninjass.php');

    // echo 'end of php :(';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first PHP file</title>
    <style>
        .container{
            text-align: center;
        }
        h3{
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- <div class="container">
        <h1>Products</h1>
        <ul>
            <?php foreach($products as $product){ ?>
                <h3><?php echo $product['name'] ?></h3>
                <p>NOK: <?php echo $product['price'] ?></p>
                <br />
            <?php }?>
        </ul>
        
    </div> -->

    <!-- <div>
        <ul>
            <?php foreach($products as $product) { ?>
                <?php if($product['price'] > 15) { ?>
                    <li><?php echo $product['name'] ?></li>
                <?php } ?>
            <?php } ?>
        </ul>
    </div> -->

    <?php 
        require('content.php');
        require('content.php');
        require('content.php');
    ?>

</body>
</html>