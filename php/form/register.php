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
  <link rel="stylesheet" href="reg-css/form.css">
  <script src = "js/.js"></script>
</head>
<body>
  <!-- Navbar -->
  <div>
  <nav class="my-navbar-logo navbar navbar-expand-xl navbar-dark bg-dark">
          <div class=" container-fluid justify-content-center">
          <a class="navbar-brand" href="../../index.php">
              <img src="../../img/logo.png" width="90" height="90" class="d-inline-block align-top" alt="">
          </a>
          </div>
    </nav>
    <nav class="my-navbar navbar navbar-expand-xl navbar-dark bg-dark">
    <div class="container-fluid justify-content-center">
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon justify-content-center"></span>
          </button>
      <div class="collapse navbar-collapse justify-content-center"  id="collapsibleNavbar">
          <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="../../index.php">Trang chủ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../about.php">Giới thiệu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../product.php">Sản phẩm</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../news.php">Tin tức</a>
              </li>
              </li>
          
           </ul>
       </div>
    </div>
    </nav>
    <!-- end .navbar -->
  </div>


  <div class="h-100 h-custom my-container">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-8 col-xl-6">
          <div class="card rounded-3">
            <img src="reg-img/regform.jpg" class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;">
            <div class="card-body p-4 p-md-5">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Đăng Ký</h3>

              <form action="../../index.php" method="post" class="px-md-2">
              <div class="form-outline mb-4">
                  <input type="text" name="username" id="username" class="form-control"/>
                  <label class="form-label" for="username">Username</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" name="password" id="password" class="form-control"/>
                  <label class="form-label" for="password">Password</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name="Name" id="Name" class="form-control"/>
                  <label class="form-label" for="Name">Họ và Tên</label>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">

                    <div class="form-outline datepicker">
                      <input type="date" name="birthday" class="form-control">
                      <label for="birthday" class="form-label">Ngày Sinh</label>
                    </div>

                  </div>
                  <div class="col-md-6 mb-4">

                    <select class="select">
                      <option value="1" disabled>Giới tính</option>
                      <option value="2">Nam</option>
                      <option value="3">Nữ</option>
                      <option value="4">Khác</option>
                    </select>

                  </div>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name="email" id="email" class="form-control"/>
                  <label class="form-label" for="email">Email</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name="phoneNumber" id="phoneNumber" class="form-control"/>
                  <label class="form-label" for="phoneNumber">Số điện thoại</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name="address" id="address" class="form-control"/>
                  <label class="form-label" for="address">Địa chỉ</label>
                </div>
                <p class="text-center text-muted mt-5 mb-0">Đã có tài khoản? <a href="login.php"
                    class="fw-bold text-body"><u>Hãy đăng nhập</u></a></p>

                <button type="submit" name="login" class="btn btn-success btn-lg mb-1" style="background-color: #ff7f50;">Đăng Ký</button>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
