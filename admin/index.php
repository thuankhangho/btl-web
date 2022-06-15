<!DOCTYPE html>
<html lang="en">
<head>
  <!-- include library -->
  <?php include ('../header.php') ?>
  <!-- CSS -->
  <link rel="stylesheet" href="admin-styles/styles.css">
  <title>Admin Panel</title>
</head>
<body>

  <!-- nav bar --> 
  <div>
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/btl-web/admin/";
    include($IPATH."navbar.php");?>
  </div>
  <!-- end nav bar --> 

    <a href="memberManagement.php" style="text-decoration: none"><div class="p-3 mb-2 bg-primary bg-gradient text-white">Quản lý thành viên</div></a>
    <a href="productManagement.php" style="text-decoration: none"><div class="p-3 mb-2 bg-secondary bg-gradient text-white">Quản lý sản phẩm</div></a>
    <a href="newsManagement.php" style="text-decoration: none"><div class="p-3 mb-2 bg-success bg-gradient text-white">Quản lý tin tức</div></a>
    <a href="commentManagement.php" style="text-decoration: none"><div class="p-3 mb-2 bg-danger bg-gradient text-white">Quản lý bình luận</div></a>
  <!-- footer --> 
  <!-- <footer class="bg-light text-center text-lg-start">
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    Admin Panel!!!
  </div>
  </footer> -->
  <!-- end footer  -->
</body>
</html>