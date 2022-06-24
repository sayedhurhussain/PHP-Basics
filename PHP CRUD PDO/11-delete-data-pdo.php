<?php
require_once "01-pdo.php";
// sql to delete a record
$sql = "DELETE FROM users WHERE id=3";

// use exec() because no results are returned
$conn->exec($sql);
echo "Record deleted successfully";
?>