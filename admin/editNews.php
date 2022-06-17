<?php
  if ($_POST) {
    // include database connection
    include ('../config/config.php');
    try {
      // // insert query
      // $nameErr = $YearErr ='';
      $id = $_POST['id'];
      $name = $_POST['name'];
      $datetime = $_POST['datetime'];
      $content = $_POST['content'];
      // if($input_name=='')
      // {
      //     $nameErr = "Name is required";
      // }
      // else if(strlen($input_name)>40||strlen($input_name)<5)
      // {
      //     $nameErr = "Name must be within 5-40 characters";
      // }
      // if($input_name=='')
      // {
      //     $YearErr = "Year is required";
      // }
      // else if(!is_numeric($input_year))
      // {
      //     $YearErr = "Invalid input!";
      // }
      // else if($input_year<1990||$input_year>2022)
      // {
      //     $YearErr = "Year must be within the range of 1990-2022";
      // }
      $query3 = "UPDATE news SET name = ?, datetime = ?, content = ?, WHERE id = ?";
      $stmt = $conn->prepare($query3);
      // prepare query for execution

      // Execute the query
      // if($nameErr==''&&$YearErr==''){
          $stmt->bind_param('sssi', $name, $datetime, $content, $id);
          $stmt->execute();
      // }
      if ($_POST['submit'])
      {
        echo "<script>window.location.href='editNews.php?id=$id&username=$username&password=$password&full_name=$fullname&sex=$sex&birthday=$birthday&email=$email&phone=$phone&address=$address'; alert('Chỉnh sửa thành công!')</script>";
      }
      // else{
      //     echo "<div class='alert alert-danger'>Unable to save record.</div>";
      //     if($nameErr!='')
      //     {
      //         echo "<div class='alert alert-danger'>'$nameErr'</div>";
      //     }
      //     if($YearErr!='')
      //     {
      //         echo "<div class='alert alert-danger'>'$YearErr'</div>";
      //     }
      // }
      mysqli_close($conn);
    }   
    // show error
    catch(mysqli_sql_exception $exception){
      die('ERROR: ' . $exception->getMessage());
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Font Awesome CDN-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet">
  <!-- jQuery CDN-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- jsdelivr CDN / Sweet Alert2-->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- Bootstrap CDN-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .container { margin: 0 auto; }
  </style>
  <title>Sửa thông tin bài viết</title>
</head>
<body>
  <!-- container -->
  <div class="container">
    <div class="page-header">
      <h1>Sửa thông tin bài viết</h1>
    </div>
    <form method="post">
      <table class='table table-hover table-responsive table-bordered'>
      <tr>
          <td>ID bài viết</td>
          <td><input type='text' name='id' class='form-control' value="<?php echo $_GET['id']?>" disabled></td>
        </tr>
      <tr>
          <td>Tên bài viết</td>
          <td><input type='text' name='name' class='form-control' value="<?php echo $_GET['name']?>" required></td>
        </tr>
        <tr>
          <td>Ngày giờ đăng bài viết</td>
          <td><input type='datetime-local' name='datetime' class='form-control' value="<?php echo $_GET['datetime']?>" required></td>
        </tr>
        <tr>
          <td>Nội dung bài viết</td>
          <td><input type='textarea' name='content' class='form-control' value="<?php echo $_GET['content']?>" required></td>
        </tr>
        <tr>
          <td></td>
          <td>
          <input type='submit' name='submit' value='Lưu' class='btn btn-primary'/>
          <a href='newsManagement.php' class='btn btn-danger'>Quay lại bảng tin tức</a>
          </td>
        </tr>
      </table>
    </form>
  </div> 
  <!-- end .container -->
</body>
</html>