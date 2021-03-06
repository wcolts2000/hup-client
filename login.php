<?php $title = 'Login' ?>
<?php $description = 'Hurry Up Print login page' ?>
<?php require('head.php') ?>

<?php require('header.php'); ?>

<div class="container m2a">
  <div class="row">
    <?php 
      if (isset($_GET['registration'])) {
        echo "<h5 style='color: limegreen; padding-left: 2rem;'>Thank you for registering, Please Login</h5>";
      }
      if (isset($_GET['webservice'])) {
        echo "<h5 style='padding-left: 2rem;'>Please Login to request services. If you have not registered yet, follow the register link</h5>";
      }
    ?>
    <div class="col s12 m6">
      <div class="card">
        <div class="card-content">
          <span class="card-title">New Customer?</span>
          <p>Please go to our
            <a href="register.php">register</a>
            page and create a new account.</p>
        </div>
        <div class="card-action">
          <a class="btn waves-effect waves-light black white-text" href="register.php<?php if (isset($_GET['webservice'])) {echo '?webservice=true';}?>">Register</a>
        </div>
      </div>
    </div>
    <div class="col s12 m6">
      <form action="<?php echo htmlspecialchars('/includes/login.inc.php') ?>" method="post" class="card">
        <div class="card-content">
          <div class="mb2">
            <span class="card-title">
              Login
            </span>
          </div>
          <div class="mb2">
            <?php
            if (isset($_GET['error'])) {
              if ($_GET['error'] == "incorrectcredentials") {
                echo "<span class='err'>Incorrect Credentials</span>";
              }
            }
            if (isset($_GET['error'])) {
              if ($_GET['error'] == "emptyfields") {
                echo "<span class='err'>enter email and password</span>";
              }
            }
            ?>
          </div>
          <div class="input-field">
            <label for="email" data-error="must be a valid email" data-success="valid">Email</label>
            <input 
              type="email"
              id="email"
              name="email"
              placeholder="johndoe@email.com"
              class="validate"
              value="<?php 
                if (isset($_GET['email'])) {
                  echo $_GET['email'];
                }
              ?>"
            >
          </div>
          <div class="input-field">
            <label for="password">Password</label>
            <input type="password" id="password" name="pwd" placeholder="$k8vG3p09aB%77hn2^" class="validate">
          </div>
          <input type="text" name="webservice" hidden value="<?php if (isset($_GET['webservice'])) { echo 'true'; } ?>">
          <div class="row">
            <button type="submit" name="login-submit" class="btn yellow darken-1 black-text waves-effect waves-light">Login</button>
          </div>
          <div class="row">
            <?php
              if (isset($_GET['newpwd'])) {
                if ($_GET["newpwd"] == "passwordupdated") {
                  echo '<p class="signupsuccess">Your password has been reset!</p>';
                }
              }
            ?>
            <p>Forgot your password? <a href="password_reset.php">Reset Password Here</a></p>
            
          </div>
        </div>
      </form>
    </div>
  </div>
</div>


<?php require('footer.php'); ?>