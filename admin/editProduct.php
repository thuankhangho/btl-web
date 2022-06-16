<?php
  if ($_POST) {
    // include database connection
    include ('../config/config.php');
    try {
      // // insert query
      // $nameErr = $YearErr ='';
      $id = $_GET['id'];
      $name = $_POST['name'];
      $description = $_POST['description'];
      $price = $_POST['price'];
      $img_path = "img/product-list/" . $_FILES['img_path']['name'];
      $status = $_POST['status'];
      $feature = $_POST['feature'];
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
      $query3 = "UPDATE product SET name = ?, description = ?, price = ?, img_path = ?, status = ?, feature = ? WHERE id = ?";
      $stmt = $conn->prepare($query3);
      // prepare query for execution

      // Execute the query
      // if($nameErr==''&&$YearErr==''){
      $stmt->bind_param('ssisiii', $name, $description, $price, $img_path, $status, $feature, $id);
      $stmt->execute();
      move_uploaded_file($_FILES['img_path']['tmp_name'], '../img/product-list/' . $_FILES['img_path']['name']);
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
      if ($_POST['submit'])
      {
        echo "<script>window.location.href='editProduct.php?id=$id&name=$name&description=$description&price=$price&img_path=$img_path&status=$status&feature=$feature'; alert('Record was saved successfully.')</script>";
      }
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
  <!-- jQuery CDN-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- Bootstrap CDN-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .container { margin: 0 auto; }
  </style>
  <title>Sửa thông tin sản phẩm</title>
</head>
<body>
  <!-- container -->
  <div class="container">
    <div class="page-header">
      <h1>Sửa thông tin sản phẩm</h1>
    </div>
    <form method="post" enctype="multipart/form-data">
      <table class='table table-hover table-responsive table-bordered'>
        <tr>
          <td>ID</td>
          <td><input type='text' name='id' class='form-control' value="<?php echo $_GET['id']?>" disabled></td>
          <tr>
          <td>Tên sản phẩm</td>
          <td><input type='text' name='name' class='form-control' value="<?php echo $_GET['name']?>" required></td>
        </tr>
        <tr>
          <td>Mô tả sản phẩm</td>
          <td><input type='text' name='description' class='form-control' value="<?php echo $_GET['description']?>" required></td>
        </tr>
        <tr>
          <td>Giá</td>
          <td><input type='number' name='price' class='form-control' value="<?php echo $_GET['price']?>" required></td>
        </tr>
        <tr>
          <td>Hình ảnh sản phẩm</td>
          <td><input type="file" name="img_path" class='form-control' value="<?php echo $_GET['img_path']?>" accept=".png, .jpg, .jpeg" required></td>
        </tr>
        <tr>
          <td>Trạng thái</td>
          <td><input type='number' name='status' class='form-control' value="<?php echo $_GET['status']?>" required></td>
        </tr>
        <tr>
          <td>Trên tin tức?</td>
          <td><input type='number' name='feature' class='form-control' value="<?php echo $_GET['feature']?>" required></td>
        </tr>
        <tr>
          <td></td>
          <td>
            <input type='submit' name='submit' value='Lưu' class='btn btn-primary' />
            <a href='productManagement.php' class='btn btn-danger'>Quay lại bảng sản phẩm</a>
          </td>
        </tr>
    </form>
  </div> 
  <!-- end .container -->
</body>
</html>