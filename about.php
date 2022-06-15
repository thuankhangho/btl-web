<!DOCTYPE html>
<html lang="en">
<head>
  <!-- include library -->
  <?php include ('header.php'); ?>
  <!-- CSS -->
  <link rel="stylesheet" href="../styles/styles.css">
  <script src = "js/script.js"></script>
  <title>Giới thiệu</title>
</head>

<body>
  <!-- nav bar --> 
  <div>
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/btl-web/";
    include($IPATH."navbar.php");?>
  </div>
  <!-- end nav bar --> 

  <!-- main content --> 
  <div class="my-container container-fluid justify-content-center">
    <h2 class="text-center">Giới thiệu</h2>
    <p>
      Lorem, ipsum dolor sit amet consectetur adipisicing elit.<br>
      Praesentium magni magnam corrupti accusantium dicta voluptate eveniet consectetur aperiam?<br>
      Dicta rem voluptates totam quas enim minus facilis placeat rerum ea porro.
    </p>
  </div>
  <!-- end main content --> 

  <!-- footer --> 
  <div>
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/btl-web/";
    include($IPATH."footer.php");?>
  </div>
  <!-- end footer --> 
</body>
</html>