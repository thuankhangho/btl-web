<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "res_db";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (mysqli_connect_errno()) {
  echo "Connection failed: " . mysqli_connect_error();
}
?>