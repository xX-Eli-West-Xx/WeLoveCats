<?php
  include "header.php";
?>
  <!--    carousell    -->
  <div class="carousel slide" id="home-carousel" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-slide-to="0" data-target="#home-carousel" class="active">
      </li>
      <li data-slide-to="1" data-target="#home-carousel">
      </li>
      <li data-slide-to="2" data-target="#home-carousel">
      </li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active" style="background: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.4)), url('https://drive.google.com/uc?export=view&id=184LpWmjXyNirFlKgphcIeRMZrM6ErVtT');
              background-size: cover;">
        <div class="carousel-caption right">
          <h4>
            WeLoveCats
          </h4>
          <p>
            No Spaces. Welcome to the number one shop for your little ones!
          </p>
          <a href="about.php" class="btn btn-color slide-btn btn-lg">About Us!</a>
        </div>
      </div>
      <div class="carousel-item" style="background: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.4)), url('https://drive.google.com/uc?export=view&id=1BFpylJjvs6fElFx1fx7pVjMN8IgaNT0_');
              background-size: cover;">
        <div class="carousel-caption center">
          <h4>
            It's cold out there!
          </h4>
          <p>
            You should take a look at the housing! We have something for everyone!
          </p>
          <a href="housing.php" class="btn btn-color slide-btn btn-lg">Shop Now!</a>
        </div>
      </div>
      <div class="carousel-item" style="background: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.4)), url('https://drive.google.com/uc?export=view&id=1T6-ZUn0KMy8hguBTpN8luCSMBtnovdB-');
              background-size: cover;">
        <div class="carousel-caption right">
          <h4>
            Woah there! Who are you?
          </h4>
          <p>
            Sign up for our newsletter on new products or sales!
          </p>
          <a href="signup.php" class="btn btn-color slide-btn btn-lg">Sign Up Now!</a>
        </div>
      </div>
    </div> <a class="carousel-control-prev" href="#home-carousel" data-slide="prev"><span
        class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a
      class="carousel-control-next" href="#home-carousel" data-slide="next"><span
        class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
  </div>
  </div>
  </div>
  <!--  separator DO NOT TOUCH THIS  -->
  <div>
    <br>
  </div>

  <div class="container-fluid featured-products">
    <div class="row h-100">
      <div class="col-sm-12 col-md-6 my-auto">
        <div class="card mb-3 product-card bg-lp text">
          <img src="#" class="product-img" alt="...">
          <div class="card-body">
            <h4 class="card-title">Featured Product</h4>
            <small class="...">Price/Price Range</small>
            <p class="card-text">Description</p>
          </div>
        </div>
      </div>

      <div class="col-sm-12 col-md-6 my-auto">
        <div class="card mb-3 product-card bg-salmon text">
          <img src="#" class="product-img" alt="...">
          <div class="card-body">
            <h4 class="card-title">Featured Product</h4>
            <small class="...">Price/Price Range</small>
            <p class="card-text">Description</p>
          </div>
        </div>
      </div>

      <div class="col-sm-12 col-md-6 my-auto">
        <div class="card mb-3 product-card bg-salmon text">
          <img src="#" class="product-img" alt="...">
          <div class="card-body">
            <h4 class="card-title">Featured Product</h4>
            <small class="...">Price/Price Range</small>
            <p class="card-text">Description</p>
          </div>
        </div>
      </div>

      <div class="col-sm-12 col-md-6 my-auto">
        <div class="card mb-3 product-card bg-lp text">
          <img src="#" class="product-img" alt="...">
          <div class="card-body">
            <h4 class="card-title">Featured Product</h4>
            <small class="...">Price/Price Range</small>
            <p class="card-text">Description</p>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php
  include "footer.php";
?>