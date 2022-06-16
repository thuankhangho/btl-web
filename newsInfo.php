<?php
  require_once('config/config.php');
  //select data
  $id = "";
  if (isset($_GET['news_id'])) {
    $id = $_GET['news_id'];
  }
  $query = "SELECT * FROM news WHERE id = '" . $id . "'";
  $res = mysqli_query($conn, $query);
  $newspage = mysqli_fetch_all($res, MYSQLI_ASSOC);
  $row_cnt = $res->num_rows;
  $newspage1 = $newspage[0];
  mysqli_free_result($res);
?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  <link rel="stylesheet" href="styles/news-info.css">
  <title>Tin tức</title>
</head>
<body>
  <!-- nav bar --> 
  <div>
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/btl-web/";
    include($IPATH."navbar.php");?>
  </div>
  <!-- end nav bar --> 

  <div id="container">
        <div class="newsDISP">
            <div class="mb-3 text-white">
                <h1><?php echo htmlspecialchars($newspage1['name']); ?></h1>
            </div>
            <p class="lead text-white">
              <span class="text-white">
                <h5 class="text-white"><?php echo htmlspecialchars($newspage1['datetime']); ?></h5>
              </span>
              <p class="text-white"><?php echo htmlspecialchars($newspage1['content']); ?></p>
            </p>
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