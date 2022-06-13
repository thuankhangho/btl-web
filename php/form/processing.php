<?php
    require_once('config.php');
    if (isset($_POST['login']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "SELECT * FROM user WHERE username = '$username', password = '$password'";
        $result = mysqli_query($conn, $query);
        if ($result) {
        echo "OK";
      } 
      else {
        echo "Not OK";
      }
    }
?>