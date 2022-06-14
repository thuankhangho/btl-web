<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS -->
  <link rel="stylesheet" href="styles/header.css">
    <title>Document</title>
</head>
<body>

  <!-- Navbar -->
  <nav class="my-navbar-logo navbar navbar-expand-xl navbar-dark bg-dark">
      <div class="my-container container-fluid justify-content-center">
      <a class="navbar-brand" href="index.php">
          <img src="img/logo.png" width="90" height="90" class="d-inline-block align-top" alt="">
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
                <a class="nav-link" href="index.php">Trang chủ</a>
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
                      <li><a class="dropdown-item" href="register.php">Đăng ký</a></li>
                      <li><a class="dropdown-item" href="login.php">Đăng nhập</a></li>
                    </ul>
              </li>
          </ul>
      </div>
    </div>
  </nav>

</body>
<!-- end .navbar -->