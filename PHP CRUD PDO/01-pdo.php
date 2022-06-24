<?php
// PDO Database Connection
$conn = new PDO('mysql:host=localhost;port=3306;dbname=dbcon', 'dev', 'Nopass#123');
$statement = $conn->query("SELECT 'Hello, dear MySQL user!' AS _message FROM DUAL");
$row = $statement->fetch(PDO::FETCH_ASSOC);
echo htmlentities($row['_message']);