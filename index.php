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
  <link rel="stylesheet" href="styles/styles.css">
  <script src = "js/script.js"></script>
  <title>Bài tập lớn Lập trình Web (CO3049)</title>
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
                <a class="nav-link" href="#">Trang chủ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Giới thiệu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Sản phẩm</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Tin tức</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Liên lạc</a>
              </li>    
               <!-- Icon dropdown -->
               <li class="dropdown user-drop">
                  <button type="button" class="user-btn btn btn-dark dropdown-toggle" data-bs-toggle="dropdown">
                  <i class="fas fa-user-circle"></i>
                  </button>
                    <ul class="dropdown-menu dropdown-menu-dark">
                      <li><a class="dropdown-item" href="php/form/register.php">Đăng ký</a></li>
                      <li><a class="dropdown-item" href="php/form/login.php">Đăng nhập</a></li>
                    </ul>
               </li>
           </ul>
       </div>
    </div>
    </nav>
    <!-- end .navbar -->

    <!-- main content --> 
    <div class="main-content">
            <div class=" food-search row height d-flex justify-content-center align-items-center">

                <div class="col-md-8">
                  <div class="search">
                      <i class="fa fa-search"></i>
                      <input type="text" name="input-search" class="form-control" placeholder="Bạn đang thèm gì?">
                      <button class="btn btn-primary" name="submit-search">Tìm kiếm</button>
                  </div>     
                </div>
            </div>
        <div class="container-img">
              <h2 class="text-center">Khám phá danh mục sản phẩm</h2>
               
              <div class="row justify-content-center">
                
                  <div class="col-3">
                    <a href="#">
                      <img src="img/food-img/ramen-cata.jpg" alt="" class="img-fluid img-curve">
                    </a>
                  </div>
                  <div class="col-3">
                      <a href="#">
                        <img src="img/food-img/sushi-cata.jpg" alt="" class="img-fluid img-curve">
                      </a>
                  </div>
                
                  <div class="col-3">
                    <a href="#">
                      <img src="img/food-img/beverage-cata.jpg" alt="" class="img-fluid img-curve">
                    </a>
                  </div>
                  <div class="col-3">
                    <a href="#">
                      <img src="img/food-img/rice-cata.jpg" alt="" class="img-fluid img-curve">
                      </a>
                  </div>
              </div>
         </div>
         <div class="blog bg-dark">
              <div class="headline-container text-center">
                  <h3 class="headline">Bảng Tin</h3>
              </div>
              <div class="snippet">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit ligula nunc, non consequat lorem aliquam a. Vivamus non consequat urna. Fusce lobortis ultrices tristique. Nullam ante leo, pulvinar et eleifend a, congue quis libero. Mauris nec ullamcorper justo. Etiam sit amet finibus nulla, in ullamcorper sem. Proin quis mauris ac neque tempus ultricies. Etiam suscipit tincidunt metus elementum volutpat.

Sed interdum hendrerit ante sed gravida. Quisque est augue, mattis ac mi nec, eleifend venenatis lorem. Morbi lobortis placerat commodo. In luctus mi purus. Donec non eros in velit faucibus vulputate. Nam eu est vulputate, congue justo ut, sodales orci. Praesent eu fermentum massa. Phasellus ac volutpat lacus. Sed porttitor lorem non leo placerat, in euismod risus laoreet. Praesent sit amet arcu volutpat, congue est ac, lacinia lacus. In hac habitasse platea dictumst. Suspendisse tempor ornare lorem in lacinia. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Maecenas vel metus eget ex venenatis sagittis eu et turpis. Nunc fermentum est eu odio tincidunt, non dapibus justo cursus. Donec imperdiet convallis nibh, a aliquet odio congue eget.
              </div>
         </div>
    </div>
    <!-- end .main-content -->    

    <!-- footer --> 
    <div class="footer text-center">
        <p style="font-weight: bold; color: white">©2022 All Rights Reserved</p>
    </div>
    <!-- end .footer -->
</body>
</html>