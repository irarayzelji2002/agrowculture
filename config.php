<?php
$servername = "localhost";
$db_username = "root"; //xampp default
$db_password = "";  //xampp default
$database = "agrowculture"; //name of database

 // CREATE CONNECTION
 $conn = mysqli_connect($servername, $db_username, $db_password, $database);
    
 // CHECK CONNECTION
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}

?>