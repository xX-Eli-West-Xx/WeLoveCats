<?php
  include "header.php";
?>
<div class="container">
    <div class="text-center h-color">
        <br><br>
          <div class="row mb-3">
              <div class="col-lg-8 offset-lg-2 text-center">
                <section>
                <h1>Sign In</h1><br>
                <h3>It's good to see you again!</h3><br>
                    <form action="includes/login.inc.php" method="post">
                        <input type="text" name="mailuid" placeholder="Username/E-mail"><br><br>
                        <input type="password" name="pwd" placeholder="Password"><br><br>
                        <?php
                  if (isset($_GET['error'])) {
                    if ($_GET['error'] == "emptyfields") {
                      echo '<h5 class="error nav-link"><i>Please fill in all fields</i></h5>';
                    }
                    elseif ($_GET['error'] == "sqlerror") {
                        echo '<h5 class="error nav-link"><i>An error has occured. Please try again later.</i></h5>';
                    }
                    elseif ($_GET['error'] == "wrongpwd") {
                        echo '<h5 class="error nav-link"><i>Incorrect password</i></h5>';
                    }
                    elseif ($_GET['error'] == "usernotfound") {
                        echo '<h5 class="error nav-link"><i>This user does not exist</i></h5>';
                    }
                  }
                  else {
                    echo "";
                  }
                  
                ?>
                        <button type="submit" name="login-submit" class="btn-color-inv btn-lg">Log In</button>
                    </form>
                </section>
              </div>
          </div>

          <br><br><br>

<?php
  include "footer.php";
?>