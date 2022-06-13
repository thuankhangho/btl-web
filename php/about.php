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
  <link rel="stylesheet" href="../styles/styles.css">
  <script src = "js/script.js"></script>
  <title>Giới thiệu</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="my-navbar-logo navbar navbar-expand-xl navbar-dark bg-dark">
          <div class="my-container container-fluid justify-content-center">
          <a class="navbar-brand" href="../index.php">
              <img src="../img/logo.png" width="90" height="90" class="d-inline-block align-top" alt="">
          </a>
          </div>
    </nav>
    <nav class="my-navbar navbar navbar-expand-xl navbar-dark bg-dark">
    <div class="my-container container-fluid justify-content-center">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon justify-content-center"></span>
          </button>
      <div class="collapse navbar-collapse justify-content-center"  id="collapsibleNavbar">
          <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="../index.php">Trang chủ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">Giới thiệu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="product.php">Sản phẩm</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="news.php">Tin tức</a>
              </li>
               <!-- Icon dropdown -->
               <li class="dropdown user-drop">
                  <button type="button" class="user-btn btn btn-dark dropdown-toggle" data-bs-toggle="dropdown">
                  <i class="fas fa-user-circle"></i>
                  </button>
                    <ul class="dropdown-menu dropdown-menu-dark">
                      <li><a class="dropdown-item" href="../php/form/register.php">Đăng ký</a></li>
                      <li><a class="dropdown-item" href="../php/form/login.php">Đăng nhập</a></li>
                    </ul>
               </li>
           </ul>
       </div>
    </div>
    </nav>
    <!-- end .navbar -->

    <!-- main content --> 
    <div class="my-container container-fluid justify-content-center">
    <h2 class="text-center">Giới thiệu</h2>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
        Praesentium magni magnam corrupti accusantium dicta voluptate eveniet consectetur aperiam? 
        Dicta rem voluptates totam quas enim minus facilis placeat rerum ea porro.</p>
    </div>
    <!-- end main content --> 

    <!-- footer --> 
    <div class="footer text-center">
        <p style="font-weight: bold; color: white">©2022 All Rights Reserved</p>
    </div>
    <!-- end .footer -->
</body>
</html>