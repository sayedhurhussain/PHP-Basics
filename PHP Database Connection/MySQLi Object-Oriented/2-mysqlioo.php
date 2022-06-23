<?php
// MySQLi Object-Oriented Database Connection
$mysqli = new mysqli("localhost", "dev", "Nopass#123", "dbcon");
$result = $mysqli->query("SELECT 'Hello, dear MySQL user!' AS _message FROM DUAL");
$row = $result->fetch_assoc();
echo htmlentities($row['_message']);