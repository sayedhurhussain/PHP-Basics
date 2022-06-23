<?php
// PDO Database Connection
$conn = new PDO('mysql:host=localhost;port=3306;dbname=dbcon', 'dev', 'Nopass#123');
// See the "errors" folder for details...
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);