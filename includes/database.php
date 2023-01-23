<?php

//Params to connect to a database
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "phptutorial";

//Connection to database
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if ($conn) {
   
} else {
    die("Database connection failed!");
}

?>
