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

  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/468ec12282.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Ubuntu" />

  <title>We Love Cats :)</title>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-sm bg-lp">

  <!-- Logo -->
  <a class="navbar-brand" href="index.php">
    <img src="https://drive.google.com/uc?export=view&id=1-wFb03B1JJrsZwnAOqOYU_WlB_lRUVC5" class="nav-logo" alt="WeLoveCats">
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
          <a class="dropdown-item text-white" href="https://datadev.devcatalyst.com/~mahs_mozzarelamen/">Clothes?!</a>
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