<?php
$hostname = "YOURDBHOST"; // your hostname here
$db_username = "YOURDBUSER"; // your database username here
$db_password = "YOURDBPASS"; // your database password here
$db_name = "YOURDBNAME"; // your database name here
$conn = mysqli_connect($hostname, $db_username, $db_password, $db_name) or die("Database connection failed.");
?>