<?php
    /*
     Types of Arrays in PHP
      1. Indexed Arrays
      2. Associative Arrays
    */

    // Declaring an indexed array
    $fruits = ["Banana", "Orange", "Pineapple"];
    $numbers = range(1,10);  // end is inclusive
    $letters = range("A","N");

    // Declaring an associative array
    $prices = ["bag" => 100, "tire" => 200, "oil" => 20];
    $elements = array("Hydrogen"=>1, "Helium"=>2, "Lithium"=>3);

    // getting elements from array
    echo $fruits[0],"<br>";
    echo $numbers[8];
    echo "<br><br>";

    // length of array
    echo "Length of fruits array: ",count($fruits),"<br>";
    echo "<br><br>";

    // getting all elements from indexed array
    for($i = 0; $i< count($numbers); $i++)  //using for loop
        echo $numbers[$i]." ";
    echo "<br><br>";

    foreach($numbers as $number){  //using for-each loop
        echo $number, " ";
    }
    echo "<br><br>";

    // getting all keys from associative array
    $keys = array_keys($prices);
    foreach($keys as $key)
        echo $key, " ";

    echo "<br>";

    // getting all values from associative array
    $values = array_values($prices);
    foreach($values as $value)
        echo $value, " ";
    echo "<br>";

    // setting elements in indexed array
    echo "Value at index 2: ", $fruits[2], "<br>";
    $fruits[2] = "Pomegranate";
    echo "Value at index 2: ", $fruits[2];
    echo "<br><br>";

    // setting elements in associative array
    echo "Value of key 'oil': ", $prices["oil"], "<br>";
    $prices["oil"] = 5000;
    echo "Value of key 'oil': ", $prices["oil"];
    echo "<br><br>";

    // pushing elements to array
    array_push($fruits, "Apple", "Pineapple", "Grapes");
    foreach($fruits as $fruit) echo $fruit." ";
    echo "<br><br>";

    //popping elements from array
    array_pop($fruits); //returns popped value
    foreach ($fruits as $fruit) echo $fruit." ";
    echo "<br><br>";

    //SORTING INDEXED ARRAYS
    // ascending order - sort()
    sort($fruits);
    foreach($fruits as $fruit) echo $fruit." ";
    echo "<br>";

    // descending order - rsort()
    sort($fruits);
    foreach($fruits as $fruit) echo $fruit." ";
    echo "<br>";

    //SORTING ASSOCIATIVE ARRAY ACCORDING TO VALUES
    // ascending order - asort()
    asort($prices);
    foreach($prices as $price) echo $price." ";
    echo "<br>";

    // descending order - arsort()
    arsort($prices);
    foreach($prices as $price) echo $price." ";
    echo "<br>";

    //SORTING ASSOCIATIVE ARRAY ACCORDING TO KEYS
    // ascending order - ksort()
    ksort($prices);
    foreach($prices as $price) echo $price." ";
    echo "<br>";

    // descending order - krsort()
    krsort($prices);
    foreach($prices as $price) echo $price." ";
    echo "<br>";