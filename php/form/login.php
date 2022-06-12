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

<style>

</style>
<body>
    <div class="h-100 h-custom my-container">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-8 col-xl-6">
          <div class="card rounded-3">
            <img src="reg-img/regform.jpg" class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;">
            <div class="card-body p-4 p-md-5">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Đăng Nhập</h3>

              <form action="../../index.php" method="post" class="px-md-2">

                <div class="form-outline mb-4">
                  <input type="text" name="username" id="username" class="form-control"/>
                  <label class="form-label" for="username">Username</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" name="password" id="password" class="form-control"/>
                  <label class="form-label" for="password">Mật khẩu</label>
                </div>
                <p class="text-center text-muted mt-5 mb-0">Chưa có tài khoản? <a href="register.php"
                    class="fw-bold text-body"><u>Hãy đăng ký</u></a></p>
                <button type="submit" name="login" class="btn btn-success btn-lg mb-1" style="background-color: #ff7f50;">Đăng Nhập</button>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>