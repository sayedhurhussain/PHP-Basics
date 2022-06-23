<?php
require_once "1-pdo.php";

  $sql = "UPDATE users SET lastname='White' WHERE id=2";

// Prepare statement
$stmt = $conn->prepare($sql);

  // execute the query
  $stmt->execute();

  // echo a message to say the UPDATE succeeded
  echo $stmt->rowCount() . " records UPDATED successfully";
  ?>