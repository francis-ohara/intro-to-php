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


// find length of string
$email = "francis.ohara@acity.edu.gh";
echo strlen($email);  // no. of characters in string
echo "<br>";
echo "<br>";

// check if string begins with substring
$sentence = "All I see is gold.";
echo str_starts_with($sentence, "All");
echo "<br>";
echo "<br>";

// check if string ends with substring
$sentence = "All you see is snow.";
echo str_ends_with($sentence, "snow.");
echo "<br>";
echo "<br>";

// remove whitespace from string
echo str_replace(" ", "", "Anything could happen at Harvard.");  // find and replace
echo "<br>";
echo implode("", explode(" ", "Anything could happen at Harvard."));  // explode then implode
echo "<br>";
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
echo "<br>";
echo "<br>";

// removing unwanted characters from beginning and end of string
$string = "./Hello my name is Bridgit. Nice to meet you!$5";
echo trim($string, "./$5");
