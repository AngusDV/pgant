<?php
$servername = "localhost";
$username = "pgant_admin";
$password = "hassanest50";
$dbname = "pgant_db";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}else{
    
    // Change character set to utf8
mysqli_set_charset($mysqli,"utf8");
    
}


?>