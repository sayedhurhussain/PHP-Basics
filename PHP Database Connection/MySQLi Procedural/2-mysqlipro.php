<?php
// MySQLi Object-Oriented Database Connection
$conn = mysqli_connect("localhost", "dev", "Nopass#123", "dbcon");
$result = $conn->query("SELECT 'Hello, dear MySQL user!' AS _message FROM DUAL");
$row = mysqli_fetch_assoc($result);
echo htmlentities($row['_message']);