<?php

// arithmetic operators
echo 40 + 2, "\n";  // addition
echo 44 - 2, "\n";  // subtraction
echo 21 * 2, "\n";  // multiplication
echo 5/3, "\n";  // division
echo 59 % 3, "\n";  // modulo
echo 2 ** 5, "\n";  // exponentiation

$bar = "89.5";
echo +$bar, "\n";  // unary plus (type conversion to int or float)
echo -$bar, "\n";  // unary minus (type conversion w/ negation)

// comparison operators
echo 5 == "5", "\n";   // equality
echo 5 === "5", "\n";  // strict equality
echo 5 != "5";  // inequality
echo 5 !== "5";  // strict inequality
echo 1 < 5, "\n";  // less than
echo 5 > 100, "\n";  // greater than
echo 5 >= 5, "\n";  // greater than or equal to
echo 6 <= 7, "\n";  // less than or equal to

// logical operators
echo 1 && 1  // and
echo 1 || 0  // or
echo !0      // not

// string concatenation
echo "Hello " . "World!";
