<?php
$conn = new mysqli("localhost","dev","Nopass#123","dbcon");

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>