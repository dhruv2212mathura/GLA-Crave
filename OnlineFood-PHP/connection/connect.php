<?php

//main connection file for both admin & front end
$servername = "localhost"; //server
$username = "root"; //username
$password = ""; //password
$dbname = "onlinefoodphp";  //database

// Create connection
$db = mysqli_connect(hostname: $servername, username: $username, password: $password, database: $dbname); // connecting 
// Check connection
if (!$db) {       //checking connection to DB	
    die("Connection failed: " . mysqli_connect_error());
}

?>