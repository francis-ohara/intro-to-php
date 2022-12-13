<h1>Welcome To Include And Require Page!</h1>

<p> <h3> To load Or Not to Load? That is the question of Include or Require!</h3>

<?php
include "text-file.txt";  //page loads on unsuccessful import
echo "<br> <br>";
require "text-file.txt"; // page does not load on unsuccessful import