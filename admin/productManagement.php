<!DOCTYPE html>
<html lang="en">
<head>
  <!-- include library -->
  <?php include ('../header.php'); ?>
  <!-- CSS -->
  <link rel="stylesheet" href="admin-styles/styles.css">
  <title>Admin Panel</title>
</head>
<body>

  <!-- nav bar --> 
  <div>
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/btl-web/admin/";
    include($IPATH."navbar.php");?>
  </div>
  <!-- end nav bar --> 
    <form method="post" action="productManagement.php">
      <a href="newProduct.php"><input type="button" class="p-3 mb-2 bg-primary bg-gradient text-white" value="Thêm sản phẩm"></a>
    </form>
      <?php
        include('../config/config.php');
        echo "<table class='table table-bordered'>
                <tr>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Mô tả sản phẩm</th>
                    <th>Giá</th>
                    <th>Hình</th>
                    <th>Trạng thái (còn/hết)</th>
                    <th>Trên tin tức?</th>
                    <th>ID của bảng bình luận</th>
                </tr>
                <tbody>";
        $sql = "SELECT * from product";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              $id = $row['id'];
              echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['description'].
              "</td><td>".$row['price']."</td><td>".$row['img_path']."</td><td>".$row['status']."</td>
              <td>".$row['feature']."</td><td>".$row['comment_board_id']."</td><td>".
              "<a href='editProduct.php?id=$id' class='btn btn-primary m-r-1em' name='edit'>Sửa</a>
              <a href='deleteProduct.php?id=$id' class='btn btn-danger'>Xóa</a></td></tr>";
          }
          echo "</tbody></table>";
        }
      ?>
  <!-- footer --> 
  <!-- <footer class="bg-light text-center text-lg-start">
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      Admin Panel!!!
    </div>
  </footer> -->
  <!-- end footer  -->
</body>
</html>