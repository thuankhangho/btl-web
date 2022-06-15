<?php
  if($_POST){
    // include database connection
    include ('../config/config.php');

    try {
      // // insert query
      // $nameErr = $YearErr ='';
      //$id = $_POST['id'];
      $name = $_POST['name'];
      $description = $_POST['description'];
      $price = $_POST['price'];
      $img_path = $_POST['img_path'];
      $status = $_POST['status'];
      $feature = $_POST['feature'];
      $comment_board_id = $_POST['comment_board_id'];
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
      $query2 = "INSERT INTO product (name, description, price, img_path, status, feature, comment_board_id) VALUES (?, ?, ?, ?, ?, ?, ?)";
      $stmt = $conn->prepare($query2);
      // prepare query for execution

      // Execute the query
      // if($nameErr==''&&$YearErr==''){
          $stmt->bind_param('ssisiii', $name, $description, $price, $img_path, $status, $feature, $comment_board_id);
          $stmt->execute();
          echo "<div class='alert alert-success'>Record was saved.</div>";
      // }
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
  <!-- include library -->
  <?php include ('../header.php'); ?>
  <style>
  .container{ margin: 0 auto; }
  </style>
</head>
<body>
  <!-- container -->
  <div class="container">
    <div class="page-header">
      <h1>Thêm sản phẩm</h1>
    </div>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <table class='table table-hover table-responsive table-bordered'>
        <!-- <tr>
          <td>ID</td>
          <td><input type='text' name='id' class='form-control' required></td>
        </tr> -->
        <tr>
          <td>Tên sản phẩm</td>
          <td><input type='text' name='name' class='form-control' required></td>
        </tr>
        <tr>
          <td>Mô tả sản phẩm</td>
          <td><input type='text' name='description' class='form-control' required></td>
        </tr>
        <tr>
          <td>Giá</td>
          <td><input type='number' name='price' class='form-control' required></td>
        </tr>
        <tr>
          <td>Đường dẫn đến hình ảnh sản phẩm</td>
          <td><input type='text' name='img_path' class='form-control' required></td>
        </tr>
        <tr>
          <td>Trạng thái</td>
          <td><input type='number' name='status' class='form-control' required></td>
        </tr>
        <tr>
          <td>Trên tin tức?</td>
          <td><input type='number' name='feature' class='form-control' required></td>
        </tr>
        <tr>
          <td>ID của bảng nhận xét</td>
          <td><input type='number' name='comment_board_id' class='form-control' required></td>
        </tr>
        <tr>
          <td></td>
          <td>
            <input type='submit' value='Lưu' class='btn btn-primary' />
            <a href='productManagement.php' class='btn btn-danger'>Quay lại bảng sản phẩm</a>
          </td>
        </tr>
      </table>
    </form>
  </div> 
  <!-- end .container -->
</body>
</html>