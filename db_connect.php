<?php
// Four variables to connect to the database
$host = "database-1.cjanolyxqfqh.eu-north-1.rds.amazonaws.com";
$username = "admin";
$user_pass = "Brandman";
$database_in_use = "test";


// create a database connection instance
$mysqli = new mysqli($host, $username, $user_pass, $database_in_use);

//echo $mysqli->host_info . "<br>";

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

?>