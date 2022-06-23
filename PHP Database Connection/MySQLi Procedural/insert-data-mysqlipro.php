  <?php
  // MySQLi Object-oriented Database Connection
require_once "4-mysqlipro.php";
$sql = "INSERT INTO users (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

mysqli_query($conn, $sql);
echo "New record created successfully";
  ?>