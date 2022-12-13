<?php

// while loop
$number = 0;

while ($number < 10){
    echo $number, " hello\n";
    $number ++;
}
echo "\n\n";

// for loop
for ($number = 10; $number < 20; $number ++){
    echo $number, " hello\n";
}
echo "\n\n";


// foreach loop
$arr = [20, 21, 22, 23, 24, 25, 26, 27, 28, 29];  // iterable

foreach($arr as $elem){
    echo $elem, " ";
}