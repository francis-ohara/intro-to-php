<?php

// Declaring a variable
$integer = 12;
$string = "hello world";
$double = 3.8;
$boolean = true;
$null = null;

// Declaring a constant
const PI = 3.141;

// Conditional statement
$number = 45;

if ($number < 30){
    echo "small\n";
}
else if ($number <60){
    echo "medium\n";
}
else if ($number < 90) {
    echo "large\n";
}
else {
    echo "Over the top!\n";
}


//string concatenation
$string1 = "string";
$string2 = " concatenation";

echo $string1 . $string2;