<h1>Welcome</h1>

<?php

$unam = $_POST["username"];
$pass = $_POST["password"];


echo "Username: ", $unam, "<br>";
echo "Password: ", $pass, "<br><br>";

if($unam == "francis" && $pass == "password"){
	echo "<em>Welcome Bro!</em>";
} else {
	header("Location: ./error.php");
}
