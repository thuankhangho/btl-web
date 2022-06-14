<?php
    include 'config/config.php';
    //select data
    $id="";
    if(isset($_GET['id_prod']))
        {
            $id = $_GET['id_prod'];
        }
    $query1 = "SELECT * FROM product WHERE id = $id";
    $res = mysqli_query($conn,$query1);
    $food = mysqli_fetch_all($res,MYSQLI_ASSOC);
    $row_cnt = $res->num_rows;
    mysqli_free_result($res);
?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Font Awesome CDN-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet">
  <!-- jQuery CDN-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- Bootstrap CDN-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- CSS -->
  <link rel="stylesheet" href="styles/product-style.css">
  <script src = "js/script.js"></script>
  <title>Sản phẩm</title>
</head>

<body>
<!-- nav bar --> 
    <div>
      <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/btl-web/";
      include($IPATH."navbar.php");?>
    </div>
    <?php
        if($row_cnt==0){
            echo "<div class='alert alert-danger'>No records found.</div>";
        }
    ?>
</body>
</html>