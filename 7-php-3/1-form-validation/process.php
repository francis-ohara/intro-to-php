<?php
$search_type = $_POST["search-type"];
$search_term = $_POST["search-term"];

if(!$search_type || !$search_term) {
    echo "You either did not select a search type or did not enter a search term";
    exit;
}
//header("Location: file1.php");


// checking for button pressed
// use isset function
echo "lallala";
echo $_POST["submit"];