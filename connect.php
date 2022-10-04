<?php
$hostname = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "db_ecom";
// Create connection
$conn = new mysqli($hostname, $db_user, $db_pass, $db_name);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>