<?php
    require_once('config/config.php');
    //select data
    $query = "SELECT * FROM news ORDER BY datetime DESC";
    $res = mysqli_query($conn, $query);
    $news = mysqli_fetch_all($res, MYSQLI_ASSOC);
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
  <link rel="stylesheet" href="../styles/styles.css">
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
  <!--Main layout-->
<div class="container">
  <!--Section: News of the day-->
  <section class="border-bottom pb-4 mb-5">
    <div class="row gx-5">
      <div class="col-md-6 mb-4">
        <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
          <img src="https://mdbcdn.b-cdn.net/img/new/slides/080.webp" class="img-fluid" />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <span class="badge bg-danger px-2 py-1 shadow-1-strong mb-3">Tin mới</span>
        <h4><strong><?php echo $news[0]['name'];?></strong></h4>
        <p class="text-muted">
          <?php echo $news[0]['content'];?>
        </p>
        <button type="button" class="btn btn-primary">Đọc thêm</button>
      </div>
    </div>
  </section>
  <!--Section: News of the day-->

  <!--Section: Content-->
  <section>
    
    <div class="row gx-lg-5">
    <?php for($j=1; $j<count($news);$j++)
      {?>
      <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
        <!-- News block -->
        <div>
          <!-- Featured image -->
          <div class="bg-image hover-overlay shadow-1-strong ripple rounded-5 mb-4"
            data-mdb-ripple-color="light">
            <img src="https://mdbcdn.b-cdn.net/img/new/fluid/city/113.webp" class="img-fluid" />
            <a href="#!">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>
          <!-- Article data -->
          <div class="row mb-3">
            <div class="col-6">
              <a href="" class="text-info">
                <i class="fas fa-plane"></i>
                Unknown
              </a>
            </div>

            <div class="col-6 text-end">
              <u> <?php echo $news[$j]['datetime'];?></u>
            </div>
          </div>

          <!-- Article title and description -->
          <a href="" class="text-dark">
            <h5><?php echo $news[$j]['name'];?></h5>
            <p>
            <?php echo $news[$j]['content'];?>
            </p>
          </a>

          <hr />
        </div>
        <!-- News block -->
      </div>
      <?php }?>
      </div>
  </div>
  </section>
  <!--Section: Content-->

  <!-- Pagination -->
  <nav class="my-4" aria-label="...">
    <ul class="pagination pagination-circle justify-content-center">
      <li class="page-item">
        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item active" aria-current="page">
        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
      </li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#">Next</a>
      </li>
    </ul>
  </nav>
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