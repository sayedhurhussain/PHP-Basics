<?php
require_once "01-pdo.php";
// Create database
$sql = "CREATE DATABASE dbcon";
  // use exec() because no results are returned
// $conn means conn variable in pdo file 
  $conn->exec($sql);
  echo "Database created successfully";
?>