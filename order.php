<?php
    session_start();
    require './includes/dbh.inc.php';
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="order.css">
  <script src="https://kit.fontawesome.com/468ec12282.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Ubuntu" />

  <title>We Love Cats :)</title>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-sm bg-lp">

  <!-- Logo -->
  <a class="navbar-brand" href="index.php">
    <h4 style="color:white; font-family:Copperplate Gothic;">welovecats</h4>
  </a>

  <!-- Toggler / Collapse -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon">
    </span>
  </button>

  <!-- Navbar Links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Shop
        </a>
        <div class="dropdown-menu bg-salmon">
          <a class="dropdown-item text-white" href="food.php">Food</a>
          <a class="dropdown-item text-white" href="housing.php">Housing</a>
          <a class="dropdown-item text-white" href="equipment.php">Equipment</a>
        </div>
      </li>
      <?php
                if (isset($_SESSION['userUid'])) {
                  echo '
                  <li class="nav-item">
                  <a class="nav-link" href="order.php">Order</a>
                  </li>
                  ';
                } else {
                  echo ' 
                  ';
                }
      ?>
      <li class="nav-item">
        <a href="cart.php" class="nav-link">
          <i class="fas fa-shopping-cart fa-lg"></i>
        </a>
      </li>
      <!-- Login Button -->
      <!-- <a href="#" class="btn btn-nav" role="button">Sign Up | Log In</button> -->
    </ul>
    <?php
                if (isset($_SESSION['userId'])) {
                  echo '
                  <a href="index.php">
                  <button class="btn btn-nav">Welcome, '.$_SESSION['userUid'].'</button>
                  </a>

                  <a href="./includes/logout.inc.php" name="logout-submit">
                  <button class="btn btn-nav">Logout</button>
                  </a>
                  ';
                } else {
                  echo '
                  <a href="signup.php">
                  <button class="btn btn-nav">Sign Up | Log In</button>
                  </a>
                  ';
                }
              ?>
    </li>
  </div>
</nav>
<!--  end navbar   -->

<!--  end header  -->


  <!--  separator DO NOT TOUCH THIS  -->
  <div>
    <br>
  </div>

  <div class="container-fluid featured-products">
    <div class="row h-100">
      <div class="col-sm-12 col-md-6 my-auto">
        <div class="order-card card mb-3 product-card bg-lp text">
          <img src="https://drive.google.com/uc?export=view&id=1iR_FJcHPYeRNFXTArm9qvqfPX9eaPRSU" class="order-img product-img" alt="...">
          <div class="card-body">
            <h4 class="order card-title">dust</h4>
          </div>
        </div>
      </div>

      <div class="col-sm-12 col-md-6 my-auto">
        <div class="order-card card mb-3 product-card bg-salmon text">
          <img src="https://drive.google.com/uc?export=view&id=1m_Qbw7M84ejJ2G2gHHo9LXYt5adAHiur" class="order-img product-img" alt="...">
          <div class="card-body">
            <h4 class="order card-title">fire</h4>
          </div>
        </div>
      </div>

      <div class="col-sm-12 col-md-6 my-auto">
        <div class="order-card card mb-3 product-card bg-salmon text">
          <img src="https://drive.google.com/uc?export=view&id=1l5Y6UcGBAr3c1MTOeiY82IWtzuVPdldE" class="order-img product-img" alt="...">
          <div class="card-body">
            <h4 class="order card-title">water</h4>
          </div>
        </div>
      </div>

      <div class="col-sm-12 col-md-6 my-auto">
        <div class="order-card card mb-3 product-card bg-salmon text">
          <img src="https://drive.google.com/uc?export=view&id=1ysuvbVtn39csUwPPplFihy4cRw5Gk6iP" class="order-img product-img" alt="...">
          <div class="card-body">
            <h4 class="order card-title">ice</h4>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 my-auto">
        <div class="order-card card mb-3 product-card bg-lp text">
          <img src="https://drive.google.com/uc?export=view&id=1kLDvFegmn6LRqo0HRijem2tEou671wwj" class="order-img product-img" alt="...">
          <div class="card-body">
            <h4 class="order card-title">storms</h4>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 my-auto">
        <div class="order-card card mb-3 product-card bg-lp text">
          <img src="https://drive.google.com/uc?export=view&id=1PVlb-fN-2vuSEGjJSThtJnrD6Fi7vwEZ" class="order-img product-img" alt="...">
          <div class="card-body">
            <h4 class="order card-title">winds</h4>
          </div>
        </div>
      </div>
      <div class="row h-100">
        <div class="col-sm-12 my-auto">
          <div class="center card mb-3 product-card bg-salmon">
            <div class="card-body">
              <h4 class="card-title">quality equipment for doomsday</h4>
              <a href="https://datadev.devcatalyst.com/~mahs_minions/" style="color:red">
                <h2 class="order">VBSA</h2>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!--  footer?  -->
<footer>

<div class="container-fluid bg-lp">

  <!-- Logo -->
  <div class="row text-center padding-top">
    <div class="col-sm-12 col-md-4 ftr-info">
      <hr class="light ftr-hr">
      <h5 class="ftr-header">
        Collaberators!
      </h5>
      <hr class="light ftr-hr">
<a href="https://datadev.devcatalyst.com/~mahs_eggplantemoji" style="color:red;">
      <p style="">Hyperware</p>
</a>
<a href="https://datadev.devcatalyst.com/~mahs_mozzarelamen/" style="color:red;">
      <p>Dripanzees</p>
</a>
<a href="https://datadev.devcatalyst.com/~mahs_minions/" style="color:red">
      <p>VSBA</p>
</a>
    </div>
    <div class="col-sm-12 col-md-4 d-flex align-self-center text-center">
      <h3 style="font-family:Copperplate Gothic;">
          the order.
      </h3>
    </div>
    <div class="col-sm-12 col-md-4 ftr-info">
      <hr class="light ftr-hr">
      <h5 class="ftr-header">
        Shop!
      </h5>
      <hr class="light ftr-hr">
      <p><a href="food.php" style="color:white">Food</a></p>
      <p><a href="housing.php" style="color:white">Housing</a></p>
      <p><a href="equipment.php" style="color:white">Equipment</a></p>
    </div>
  </div>

  <!-- Font Awesome Icons -->
  <div class="row bg-darkteal">
    <div class="col-12 text-center">
      <hr class="icons-hr">
      <a href="#" class="icon">
        <i class="fab fa-facebook-f fa-2x"></i>
      </a>
      <a href="mailto:alaina.gowan@students.jmcss.org" class="icon">
        <i class="fas fa-envelope fa-2x"></i>
      </a>
      <a href="tel:#" class="icon">
        <i class="fas fa-phone fa-2x"></i>
      </a>
      <hr class="icons-hr i-hr-bottom">
    </div>
  </div>

  <!-- Copyright row -->
  <div class="row">
    <div class="col-12 text-center">
      <p class="ftr-copy">&copy; WeLoveCats 2022</p>
    </div>
  </div>
</div>

</footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
</body>

</html>