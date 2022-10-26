<?php
$sentence = "sometimes you can see all of";

// Changing casing
echo ucfirst($sentence);
echo "<br>";

echo ucwords($sentence); //
echo "<br>";

echo lcfirst($sentence);
echo "<br>";

echo strtolower($sentence);
echo "<br>";

echo strtoupper($sentence);
echo "<br><br>";


// OTHER STRING FUNCTIONS
$email = "francis.ohara@acity.edu.gh";
echo strlen($email);  // no. of characters in string
echo "<br>";

// remove whitespace from string
;
echo "<br>";

// splitting string by separator
$email_arr = explode("@", $email); //returns array of strings
$username = $email_arr[0];
echo "full name: ",$username, "<br>";

$username_arr = explode(".", $username);
$first = $username_arr[0];
$last = $username_arr[1];
echo "first name: ", $first, "<br>";
echo "last name: ", $last;
echo "<br><br>";

// joining string with separator
$url_arr = ["www", "francis-ohara", "com", "gh"];
$url = implode(".", $url_arr);
echo $url;
