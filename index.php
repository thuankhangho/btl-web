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
  <script src = "js/.js"></script>
  <title>Bài tập lớn Lập trình Web (CO3049)</title>
  
</head>
<body>
    
        <!-- Navbar -->
    <nav class="my-navbar-logo navbar navbar-expand-xl navbar-dark bg-dark">
          <div class="my-container container-fluid justify-content-center">
          <a class="navbar-brand" href="index.php">
              <img src="img/logo.jpg" width="90" height="90" class="d-inline-block align-top" alt="">
          </a>
          </div>
    </nav>
    <nav class="my-navbar navbar navbar-expand-xl navbar-dark bg-dark">
    <div class="my-container container-fluid justify-content-center">
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon justify-content-center"></span>
          </button>
      <div class="collapse navbar-collapse justify-content-center"  id="collapsibleNavbar">
          <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Something</a>
              </li>    
               <!-- Icon dropdown -->
               <li class="dropdown user-drop">
                  <button type="button" class="user-btn btn btn-dark dropdown-toggle" data-bs-toggle="dropdown">
                  <i class="fas fa-user-circle"></i>
                  </button>
                    <ul class="dropdown-menu dropdown-menu-dark">
                      <li><a class="dropdown-item" href="#">Sign Up</a></li>
                      <li><a class="dropdown-item" href="#">Login</a></li>
                    </ul>
               </li>
           </ul>
       </div>
    </div>
    </nav>
     <!-- end .navbar -->

    <!-- main content --> 
    <div class="main-content">
            <div class=" food-search row height d-flex justify-content-center align-items-center">

                <div class="col-md-8">
                  <div class="search">
                      <i class="fa fa-search"></i>
                      <input type="text" name="input-search" class="form-control" placeholder="What are you craving for?">
                      <button class="btn btn-primary" name="submit-search">Search</button>
                  </div>     
                </div>
            </div>


        <div class="container-img">
              <h2 class="text-center">Explore Our Catalogue</h2>
               
              <div class="row justify-content-center">
                <div class="col-4">
                  <img src="img/food-img/ramen-cata.jpg" alt="" class="img-fluid img-curve">
                </div>
                <div class="col-4">
                  <img src="img/food-img/ramen-cata.jpg" alt="" class="img-fluid img-curve">
                </div>
                <div class="col-4">
                  <img src="img/food-img/ramen-cata.jpg" alt="" class="img-fluid img-curve">
                </div>
              </div>
         </div>
    </section>
    </div>
    <!-- end .main-content -->    


    <!-- footer --> 
    <div class="footer text-center">
        <p>All rights reserved.</p>
    </div>
    <!-- end .footer -->   
 

</body>
</html>
