<?php
echo "Welcome";
$unam = $_POST["username"];
$pass = $_POST["password"];
echo $unam;
echo $pass;

if($unam == "francis" && $pass == "acity"){
	echo "Welcome Bro!";
} else {
	header("Location: http://localhost/5-php/error.php");
}
?>