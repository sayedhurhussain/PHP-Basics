<?php
require_once "1-pdo.php";
// The <pre> tag defines preformatted text.
// echo "<pre>\n";
// // $stmt is varible, $connn declear in pdo file
// $stmt = $conn->query("SELECT id, firstname, lastname FROM users WHERE lastname='Doe'");

// $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
// // print in array form 
// print_r($rows);
// echo "</pre>\n";



$stmt = $conn->query("SELECT id, firstname, lastname, email FROM users WHERE id='5'");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
// Return data in table form
echo '<table border="2">'."\n";
foreach ( $rows as $row ) {
    echo "<tr><td>";
     echo($row['id']);
    echo("</td><td>");
    echo($row['firstname']);
    echo("</td><td>");
    echo($row['lastname']);
    echo("</td><td>");
    echo($row['email']);
    echo("</td></tr>\n");
}
echo "</table>\n";