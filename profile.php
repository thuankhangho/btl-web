<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('header.php'); ?>
  <!-- CSS -->
  <style>
    .container { margin: 0 auto; }
  </style>
  <title>User Profile Panel</title>
</head>

<body>
  <!-- nav bar --> 
  <div>
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/btl-web/";
    include($IPATH."navbar.php");?>
  </div>
  <!-- end nav bar -->
  <!-- info extracting -->
  <?php 
    require_once('config/config.php');
    if (isset($_SESSION['user_id'])) {
      $query = "SELECT * FROM `user` WHERE id = '" . $_SESSION['user_id'] . "'";
      $result = $conn->query($query);
      if ($result->num_rows > 0) {
        $profile = $result->fetch_assoc();
      } else {
        echo "<div class='alert alert-warning'>Profile Not Found.</div>";
      }
      mysqli_free_result($result);
    }
    mysqli_close($conn);
  ?>
  <!-- end info extracting -->
  <!-- main content --> 
  <div class="conatainer">
    <div class="page-header">
      <h1>Thông tin thành viên</h1>
    </div>
    <form method="post">
      <table class='table table-hover table-responsive table-bordered'>
        <tr>
          <td>ID</td>
          <td><span class='form-control'><?php echo $profile['id']?></span></td>
        </tr>
        <tr>
          <td>Username</td>
          <td><span class='form-control'><?php echo $profile['username']?></span></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><span class='form-control'><?php echo $profile['password']?></span></td>
        </tr>
        <tr>
          <td>Họ & tên</td>
          <td><span class='form-control'><?php echo $profile['full_name']?></span></td>
        </tr>
        <tr>
          <td>Giới tính</td>
          <td><span class='form-control'><?php echo $profile['sex']?></span></td>
        </tr>
        <tr>
          <td>Sinh nhật</td>
          <td><span class='form-control'><?php echo $profile['birthday']?></span></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><span class='form-control'><?php echo $profile['email']?></span></td>
        </tr>
        <tr>
          <td>Số điện thoại</td>
          <td><span class='form-control'><?php echo $profile['phone']?></span></td>
        </tr>
        <tr>
          <td>Địa chỉ</td>
          <td><span class='form-control'><?php echo $profile['address']?></span></td>
        </tr>
        <tr>
          <td></td>
          <td>
            <a href=<?php echo "editProfile.php?id=" . $profile['id'];?> class='btn btn-success'>Chỉnh sửa</a>
          </td>
        </tr>
      </table>
    </form>
  </div> 
  <!-- end .main-content -->    
  <!-- footer --> 
  <div>
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/btl-web/";
    include($IPATH."footer.php");?>
  </div>
  <!-- end footer --> 
</body>
</html>