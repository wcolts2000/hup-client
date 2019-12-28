<?php $title = 'Create New Password' ?>
<?php $description = 'Hurry Up Print create new password page' ?>
<?php require('head.php') ?>

<?php require('header.php'); ?>

<main class="container m2a">
  <div class="row">
    <div class="col s12 m8 offset-m2">
    <?php 
      $selector = $_GET["selector"];
      $validator = $_GET["validator"];

      if (empty($selector) || empty($validator)) { 
        echo "Could not validate your request!";
      } else {
        if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
          ?>
            <div class="card">
              <div class="card-content">
                <h1 class="mb2">
                  <span class="card-title">
                    Create New Password
                  </span>
                </h1>
                <form action="/includes/reset-password.inc.php" method="post">
                  <input type="hidden" name="selector" value="<?php echo $selector ?>">
                  <input type="hidden" name="validator" value="<?php echo $validator ?>">
                  <div class="input-field">
                    <label for="password">New Password</label>
                    <input type="password" id="password" name="password" placeholder="$omeRea11y600DP@5$wuRd!">
                  </div>
                  <div class="input-field">
                    <label for="password-conf">New Password Confirmation</label>
                    <input type="password" id="password-conf" name="password-conf" placeholder="$omeRea11y600DP@5$wuRd!">
                  </div>
                  <div class="row">
                    <button type="submit" name="reset-password-submit" class="btn yellow darken-1 black-text waves-effect waves-light">Reset Password</button>
                  </div>
                </form>
                <?php 
                  if (isset($_GET["reset"])) {
                    if ($_GET["reset"] == "success") {
                      echo '<p class="signupsuccess">You will receive an email shortly</p>';
                    }
                  }
                ?>
              </div>
            </div>
          <?php
        }
      }
      ?>
    </div>
  </div>
</main>


<?php require('footer.php'); ?>