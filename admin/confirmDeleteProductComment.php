<?php
    include '../config/config.php';
    $id = $_GET['id'];
    $query4 = "DELETE FROM prod_comments WHERE id = ?";
    $stmt = $conn->prepare($query4);
    $stmt->bind_param('s', $id);
    if($stmt->execute())
    {
        header('Location: productCommentManagement.php');
    }
    else die('Unable to delete record.');
?>