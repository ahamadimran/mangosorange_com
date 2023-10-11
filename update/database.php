<?php
$hostName = "localhost";
$userName = "mango9yb_mangosuser";
$password = "Mangos@#123";
$databaseName = "mango9yb_mangosdb";
 $conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>