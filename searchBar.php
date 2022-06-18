<?php
include('../config/config.php');
$query = "SELECT * from product";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    print_r($result);
}
?>