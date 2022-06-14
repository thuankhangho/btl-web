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
  <link rel="stylesheet" href="styles.css">
    <title>Tin tức</title>
</head>
<body>

<!-- Navbar -->
<nav class="my-navbar-logo navbar navbar-expand-xl navbar-dark bg-dark">
    <div class="my-container container-fluid justify-content-center">
    <a class="navbar-brand" href="index.php">
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
          <a class="nav-link" href="../index.php">Trang Chủ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../php/about.php">Giới Thiệu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../php/product.php">Sản Phẩm</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../news/news.php">Tin Tức</a>
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
            <img src="../img/food-img/rice-cata.jpg" alt="Rice">
        </div>
    </div>
    </div>
</div>
        <!-- footer --> 
        <div class="footer text-center">
            <div class="container p-4">
        <!-- Section: Social media -->
                <div class="mb-4">
                    <!-- Facebook -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                      ><i class="fab fa-facebook-f"></i
                    ></a>
                    <!-- Twitter -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                      ><i class="fab fa-twitter"></i
                    ></a>
                    <!-- Google -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                      ><i class="fab fa-google"></i
                    ></a>
                    <!-- Instagram -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                      ><i class="fab fa-instagram"></i
                    ></a>
                    <!-- Linkedin -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                      ><i class="fab fa-linkedin-in"></i
                    ></a>
                </div>
            <p>orem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Donec Hendrerit Ligula Nunc, Non Consequat Lorem Aliquam A. Vivamus Non Consequat Urna. Fusce Lobortis Ultrices Tristique. Nullam Ante Leo, Pulvinar Et Eleifend A, Congue Quis Libero. Mauris Nec Ullamcorper Justo. Etiam Sit Amet Finibus Nulla, In Ullamcorper Sem. Proin Quis Mauris Ac Neque Tempus Ultricies. Etiam Suscipit Tincidunt Metus Elementum Volutpat. Sed Interdum Hendrerit Ante Sed Gravida. Quisque Est Augue, Mattis Ac Mi Nec, Eleifend Venenatis Lorem. Morbi Lobortis Placerat Commodo. In Luctus Mi Purus. Donec Non Eros In Velit Faucibus Vulputate. Nam Eu Est Vulputate, Congue Justo Ut, Sodales Orci. Praesent Eu Fermentum Massa. Phasellus Ac Volutpat Lacus. Sed Porttitor</p>
            <!-- Section: Social media -->
            <p style="font-weight: bold; color: white">©2022 All Rights Reserved</p>
            </div>
        </div>
        <!-- end .footer -->
    </body>
    </html>