<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "res_db";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>