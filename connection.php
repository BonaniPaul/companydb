<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$dbname = "employee";

// Create connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    echo ' Connection not established ';
}

	echo "connected successfully";


$con->close();
?>
