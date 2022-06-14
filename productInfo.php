<?php
    include 'config/config.php';
    //select data
    $id="";
    if(isset($_GET['id_prod']))
        {
            $id = $_GET['id_prod'];
        }
    $query1 = "SELECT * FROM product WHERE id = '".$id."'";
    $res = mysqli_query($conn,$query1);
    $dish = mysqli_fetch_all($res,MYSQLI_ASSOC);
    $row_cnt = $res->num_rows;
    $dish1 = $dish[0];
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
  <link rel="stylesheet" href="styles/product-style.css">
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
    
    <?php
        if($row_cnt==0){
            echo "<div class='alert alert-danger'>No records found.</div>";
        }
    ?>
    <main class="mt-5 pt-4">
    <div class="container dark-grey-text mt-5">

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-md-6 mb-4">
          <img src="<?php echo htmlspecialchars($dish1['img_path']); ?>" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <!--Content-->
          <div class="p-4">

            <div class="mb-3">
                <h3><?php echo htmlspecialchars($dish1['name']); ?></h3>
            </div>

            <p class="lead">
              <span><?php echo htmlspecialchars($dish1['price']); ?>.000 VND</span>
            </p>

            <p class="lead font-weight-bold">Description</p>

            <p><?php echo htmlspecialchars($dish1['desciption']); ?></p>

            <form class="d-flex justify-content-left">
              <!-- Default input -->
              <!-- <input type="number" value="1" aria-label="Search" class="form-control" style="width: 100px"> -->
              <!-- <button class="btn btn-primary btn-md my-0 p" type="submit">Add to cart -->
            <!-- <i class="fas fa-shopping-cart ml-1"></i> -->
              </button>

            </form>

          </div>
          <!--Content-->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

      <hr>

      <!--Grid row-->
      <div class="row d-flex justify-content-center wow fadeIn">

        <!--Grid column-->
        <div class="col-md-6 text-center">

          <h4 class="my-4 h4">Additional information</h4>

          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus suscipit modi sapiente illo soluta odit
            voluptates,
            quibusdam officia. Neque quibusdam quas a quis porro? Molestias illo neque eum in laborum.</p>

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4">

          <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/11.jpg" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4">

          <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/12.jpg" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4">

          <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

    </div>
  </main>
  <!--Main layout-->
    <!-- footer --> 
    <div>
          <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/btl-web/";
          include($IPATH."footer.php");?>
        </div>
    <!-- end footer --> 
</body>
</html>