<?php
    /*
     Types of Arrays in PHP
      1. Indexed Arrays
      2. Associative Arrays
    */

    // Declaring an Indexed array
    $fruits = ["Banana", "Orange", "Pineapple"];
    $numbers = range(1,10);  // end is inclusive
    $letters = range("A","N");

    // Declaring an associative array
    $prices = ["bag" => 100, "tire" => 200, "oil" => 20];
    $elements = array("Hydrogen"=>1, "Helium"=>2, "Lithium"=>3);

    //getting elements from array
    echo $fruits[0],"<br>";
    echo $numbers[8];

    echo "<br><br>";

    //getting all elements from array
    for($i = 0; $i<10; $i++)
        echo $numbers[$i]." ";

    echo "<br><br>";

    //length of array
    echo "Length of fruits array: ",count($fruits),"<br>";

    echo "<br><br>";

    //setting elements in array
    echo "Value at index 2: ", $fruits[2], "<br>";
    $fruits[2] = "Pomegranate";
    echo "Value at index 2: ", $fruits[2];
    echo "<br><br>";

    //pushing elements to array
    array_push($fruits, "Apple", "Pineapple", "Grapes");
    foreach($fruits as $fruit) echo $fruit." ";
    echo "<br><br>";

    //popping elements from array
    array_pop($fruits); //returns popped value
    foreach ($fruits as $fruit) echo $fruit." ";

    //sorting an array

    //ksort(keysort) asort() (rsort) assending, descending

