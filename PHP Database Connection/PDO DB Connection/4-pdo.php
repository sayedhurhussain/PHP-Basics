<?php
// PDO Database Connection
$dsn = "mysql:host=localhost;dbname=dbcon";
$user = "dev";
$passwd = "Nopass#123";

$conn = new PDO($dsn, $user, $passwd);

$stm = $conn->query("SELECT VERSION()");

$version = $stm->fetch();

echo $version[0] . PHP_EOL;