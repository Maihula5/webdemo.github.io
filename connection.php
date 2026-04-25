<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "cto";

$connection = mysqli_connect($server, $username, $password, $database);

if ($connection) {
	echo "Connection Succesful";
}


?>