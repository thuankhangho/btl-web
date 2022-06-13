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
  <title>Đăng nhập tài khoản</title>
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
                  <label class="form-label" for="username">Username</label>
                  <input type="text" name="username" id="username" class="form-control" required>
                </div>
                <div class="form-outline mb-4">
                  <label class="form-label" for="password" required>Mật khẩu</label>
                  <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <div class="form-outline mb-4">
                  <label class="form-label" for="Name">Họ & Tên</label>
                  <input type="text" name="Name" id="Name" class="form-control" required>
                </div>
                <div class="form-outline mb-4">
                    <label for="gender" class="form-label">Giới tính</label>
                    <select class="select" required>
                      <option value="1">Nam</option>
                      <option value="2">Nữ</option>
                      <option value="3">Khác</option>
                    </select>
                  </div>
                  <div class="form-outline mb-4">
                    <div class="form-outline datepicker">
                      <label for="birthday" class="form-label">Sinh nhật</label>
                      <input type="date" name="birthday" class="form-control" required>
                    </div>
                  </div>
                <div class="form-outline mb-4">
                  <label class="form-label" for="email" required>Email</label>
                  <input type="email" name="email" id="email" class="form-control"/>
                </div>
                <div class="form-outline mb-4">
                  <label class="form-label" for="phoneNumber" required>Số điện thoại</label>
                  <input type="text" name="phoneNumber" id="phoneNumber" class="form-control"/>
                </div>
                <div class="form-outline mb-4">
                  <label class="form-label" for="address" required>Địa chỉ</label>
                  <input type="text" name="address" id="address" class="form-control"/>
                </div>
                <p class="text-center text-muted mt-5 mb-0">Đã có tài khoản? <a href="login.php"
                    class="fw-bold text-body"><u>Hãy đăng nhập</u></a></p>
                <div style="display: flex; align-items: center; justify-content: center">
                  <button type="submit" name="login" class="btn btn-success btn-lg mb-1" style="background-color: #ff7f50">Đăng Ký</button>
                </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
