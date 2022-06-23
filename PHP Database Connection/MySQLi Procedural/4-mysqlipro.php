<?php
$servername = "localhost";
$username = "dev";
$password = "Nopass#123";
$dbname = "dbcon";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>