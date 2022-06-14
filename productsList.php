<?php
    include 'config/config.php';
    //select data
    $query1 = "SELECT * FROM product ORDER BY id";
    $res = mysqli_query($conn,$query1);
    $food = mysqli_fetch_all($res,MYSQLI_ASSOC);
    $row_cnt = $res->num_rows;
    mysqli_free_result($res);
?> 

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
  <title>Sản phẩm</title>
</head>

<body>
<!-- nav bar --> 
    <div>
      <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/btl-web/";
      include($IPATH."navbar.php");?>
    </div>
    <!-- end nav bar --> 
    
    
    <div class="displayProd">
        <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
        <?php
          if($row_cnt==0){
                echo "<div class='alert alert-danger'>No records found.</div>";
          }
        ?>
          <?php foreach($food as $dish){?>
            <div class="height d-flex justify-content-center align-items-center">
                  <div class="card p-3">  
                      <div class="d-flex justify-content-between align-items-center ">
                          <div class="mt-2">
                              <h4 class="text-uppercase"><?php echo htmlspecialchars($dish['name']); ?></h4>
                              <div class="mt-5">
                                  <h5 class="text-uppercase mb-0">Ramen</h5>
                              </div>
                          </div>
                          <div class="image">
                              <img src="<?php echo htmlspecialchars($dish['img_path']); ?>" width="200">
                          </div>
                      </div>
                        <p><?php echo htmlspecialchars($dish['desciption']); ?> </p>
                        <button class="btn btn-danger">Add to cart</button>
                  </div>
            </div>
          <?php }?>
          
        </div>
    </div>


        <!-- footer --> 
    <div>
          <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/btl-web/";
          include($IPATH."footer.php");?>
        </div>
    <!-- end footer -->
</body>
</html>

