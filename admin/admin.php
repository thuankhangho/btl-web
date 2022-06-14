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
  <link rel="stylesheet" href="admin-style/styles.css">
    <title>Admin Panel</title>
</head>
<body>

<!-- nav bar --> 
    <div>
      <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/btl-web/admin/";
      include($IPATH."navbar-admin.php");?>
    </div>
    <!-- end nav bar --> 

    <div class="p-3 mb-2 bg-primary bg-gradient text-white">Quản lý thành viên</div>
    <div class="p-3 mb-2 bg-secondary bg-gradient text-white">Quản lý tin tức</div>
    <div class="p-3 mb-2 bg-success bg-gradient text-white">Quản lý bình luận</div>
    <div class="p-3 mb-2 bg-danger bg-gradient text-white">Quản lý sản phẩm</div>
<!-- footer --> 
  <footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      Admin Panel!!!
  </div>
  <!-- Copyright -->
    </footer>
    <!-- end footer --> 
</body>
</html>