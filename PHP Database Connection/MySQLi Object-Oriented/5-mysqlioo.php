<?php
 // MySQLi Object-oriented Database Connection
$servername = "localhost";
$username = "dev";
$password = "Nopass#123";
$dbname = "dbcon";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>