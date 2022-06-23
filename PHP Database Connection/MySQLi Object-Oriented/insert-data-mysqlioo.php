  <?php
  // MySQLi Object-oriented Database Connection
require_once "3-mysqlioo.php";
// Insert Data using mysqli database connection
$sql = "INSERT INTO users (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";
//$mysqli means mysqli variable in mysqli database connection file
// $sql means insert query sql variable
$conn->query($sql);
  echo "New record created successfully";