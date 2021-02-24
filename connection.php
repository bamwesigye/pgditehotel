<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pgditehotel";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//echo "connection succesfull";
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>