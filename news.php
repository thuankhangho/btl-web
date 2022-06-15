<!DOCTYPE html>
<html lang="en">
<head>
  <!-- include library -->
  <?php include ('header.php'); ?>
  <!-- CSS -->
  <link rel="stylesheet" href="styles/news.css">
  <title>Tin tức</title>
</head>
<body>
  <!-- nav bar --> 
  <div>
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/btl-web/";
    include($IPATH."navbar.php");?>
  </div>
  <!-- end nav bar --> 

  <div id="container">
    <div id="row">
      <div class="product-details">
        <!-- News Name -->
        <h1>Món mới</h1>
        <!-- Information -->
        <p>Cơm chiên ngon & bổ dưỡng, gồm 3 thành phần duy nhất!</p>
        <p>Giảm giá 100% cho 1000 người tới quán vào 31/02/2023!</p>
      </div>
    <div id="row">
      <div class="product-image">
          <img src="img/food-img/rice-cata.jpg" alt="Rice">
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