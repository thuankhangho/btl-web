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
  <script src = "js/.js"></script>
  <title>Đăng ký tài khoản</title>
</head>
<body>
  <h2>Đăng ký tài khoản</h2>
  <form action="../index.php" method="post">
        <input type="text" name="username" placeholder="Nhập username"><br><br>
        <input type="password" name="password" placeholder="Nhập mật khẩu"><br><br>
        <input type="text" name="firstName" placeholder="Nhập họ"><br><br>
        <input type="text" name="lastName" placeholder="Nhập tên"><br><br>
        Nhập ngày sinh: <input type="date" name="birthday"><br><br>
        <input type="email" name="email" placeholder="Nhập email"><br><br>
        <input type="text" name="phoneNumber" placeholder="Nhập số điện thoại"><br><br>
        <input type="text" name="address" placeholder="Nhập địa chỉ"><br><br>
        <input type="submit" name="login" value="Đăng ký">
  </form>
</body>
</html>
