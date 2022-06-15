<?php
  require_once('config/config.php');
  //select data
  $id = "";
  if (isset($_GET['prod_id'])) {
    $id = $_GET['prod_id'];
  }
  $query = "SELECT * FROM product WHERE id = '" . $id . "'";
  $res = mysqli_query($conn, $query);
  $dish = mysqli_fetch_all($res, MYSQLI_ASSOC);
  $row_cnt = $res->num_rows;
  $dish1 = $dish[0];
  mysqli_free_result($res);
?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- include library -->
  <?php include ('header.php') ?>
  <!-- CSS -->
  <link rel="stylesheet" href="styles/productInfo-style.css">
  <script src = "js/script.js"></script>
  <title>Thông tin món ăn</title>
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
    <div class="container dark-grey-text">

      <!--Grid row-->
      <div class="row productDISP">

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
                <h1><?php echo htmlspecialchars($dish1['name']); ?></h1>
            </div>

            <p class="lead">
              <span><h4>Giá:</h4><?php echo htmlspecialchars($dish1['price']); ?>.000 VND</span>
            </p>

            <p class="lead font-weight-bold"><h5>Miêu tả:</h5></p>

            <p><?php echo htmlspecialchars($dish1['description']); ?></p>

            <p><h5>Tình trạng:</h5>
              <?php
                  if ($dish1['status'] == 1) {
                    echo '<p class="stat-ok">Còn hàng<p>';
                  } else {
                    echo '<p class="stat-fail">Hết hàng<p>';
                  }
              ?>
            </p>

            <form class="d-flex justify-content-left">
              <!-- Default input -->
              <!-- <input type="number" value="1" aria-label="Search" class="form-control" style="width: 100px"> -->
              <!-- <button class="btn btn-primary btn-md my-0 p" type="submit">Add to cart -->
              <!-- <i class="fas fa-shopping-cart ml-1"></i> -->
              <!-- </button> -->
            </form>

          </div>
          <!--Content-->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

      <hr>

      <!--Grid row-->
      <div class="row d-flex justify-content-center commentDISP">

        <!--Grid column-->
        <div class="col-md-6 text-center">
          <h4 class="my-4 h4">Comment</h4>
        </div>
        <!--Grid column-->
        <div class="row d-flex justify-content-center">
  <div class="col-md-8 col-lg-6">
    <div class="card shadow-0 border" style="background-color: #f0f2f5;">
      <div class="card-body p-4">
        <div class="form-outline mb-4">
          <input type="text" id="addANote" class="form-control" placeholder="Type comment..." />
          <label class="form-label" for="addANote">+ Add a note</label>
        </div>

        <div class="card mb-4">
          <div class="card-body">
            <p>Type your note, and hit enter to add it</p>

            <div class="d-flex justify-content-between">
              <div class="d-flex flex-row align-items-center">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(4).webp" alt="avatar" width="25"
                  height="25" />
                <p class="small mb-0 ms-2">Martha</p>
              </div>
              <div class="d-flex flex-row align-items-center">
                <p class="small text-muted mb-0">Upvote?</p>
                <i class="far fa-thumbs-up mx-2 fa-xs text-black" style="margin-top: -0.16rem;"></i>
                <p class="small text-muted mb-0">3</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
      </div>
      <!--Grid row-->

    </div>
                  
  <!--Main layout-->
  
  
  <!-- footer --> 
  <div>
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/btl-web/";
    include($IPATH."footer.php");?>
  </div>
  <!-- end footer --> 
</body>
</html>