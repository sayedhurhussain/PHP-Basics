  <?php
  // PDO Database Connection
require_once "01-pdo.php";
  $sql = "INSERT INTO users (firstname, lastname, email)
  VALUES ('John', 'Doe', 'john@example.com')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
?>