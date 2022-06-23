<?php
// PDO Database Connection
$servername = "localhost";
$username = "dev";
$password = "Nopass#123";

$conn = new PDO("mysql:host=$servername;dbname=dbcon", $username, $password);