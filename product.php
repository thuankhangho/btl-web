<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Document</title>
</head>
<body>

    <!-- nav bar --> 
    <div>
      <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/btl-web/";
      include($IPATH."navbar.php");?>
    </div>
    <!-- end nav bar --> 

<div id="container">
    <div id="col-6">
        <div class="product-details">
            <!-- Product Name -->
            <h1>Cơm chiên trứng</h1>
            <!-- Product's information -->
            <p>Lorem ipsum dolor sit amet.</p>
    </div>
    <div id="col-6">
        <div class="product-image">
            <img src="img/food-img/rice-cata.jpg" alt="Rice">
        <!-- 	product Information-->
        <div class="info">
            <h2>Nguyên liệu</h2>
            <ul>
                <li>Cơm</li>
                <li>Chiên</li>
                <li>Trứng</li>
            </ul>
        </div>
        </div>
    </div>
    </div>
</div>
    <!-- footer --> 
    <div>
      <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/btl-web/";
      include($IPATH."footer.php");?>
    </div>
    <!-- end footer --> 
    </body>
    </html>