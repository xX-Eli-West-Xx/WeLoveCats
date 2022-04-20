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
    <div class="carousel-inner" class="color: white;">
      <div class="carousel-item active">
        <img src="https://drive.google.com/uc?export=view&id=184LpWmjXyNirFlKgphcIeRMZrM6ErVtT" style="width: 100%;">
        <div class="carousel-caption">
          <h1 class="text">
            WeLoveCats
          </h1>
          <h4 class="text">
            No Spaces. Welcome to the number one shop for your little ones!
          </h4>
          <a href="about.php" class="btn btn-color slide-btn btn-lg">
                  <button class="btn btn-nav">About Us!</button>
          </a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://drive.google.com/uc?export=view&id=1BFpylJjvs6fElFx1fx7pVjMN8IgaNT0_" style="width: 100%;">
        <div class="carousel-caption center">
          <a href="https://datadev.devcatalyst.com/~mahs_mwest/">
            <h1 class="text">
              It's cold out there!
            </h1>
          </a>
          <h4 class="text">
            You should take a look at the housing! We have something for everyone!
          </h4>
          <a href="housing.php" class="btn btn-color slide-btn btn-lg">
                  <button class="btn btn-nav">Shop Now!</button></a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://drive.google.com/uc?export=view&id=1T6-ZUn0KMy8hguBTpN8luCSMBtnovdB-"  style="width: 100%;">
        <div class="carousel-caption">
          <h1 class="text">
            Woah there! Who are you?
          </h1>
          <h4 class="text">
            Sign up for our newsletter on new products or sales!
          </h4>
          <a href="signup.php" class="btn btn-color slide-btn btn-lg">
                  <button class="btn btn-nav">Sign Up Now!</button></a>
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