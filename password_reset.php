<?php $title = 'Password Reset' ?>
<?php $description = 'Hurry Up Print password reset page' ?>
<?php require('head.php') ?>

<?php require('header.php'); ?>

<div class="container m2a">
  <div class="row">
    <div class="col s12 m8 offset-m2">
      <form action="/includes/login.inc.php" method="post" class="card">
        <div class="card-content">
          <div class="mb2">
            <span class="card-title">
              Reset Password
            </span>
          </div>
          <div class="input-field">
            <label for="password">New Password</label>
            <input type="password" id="password" name="password" placeholder="$omeRea11y600DP@5$wuRd!">
          </div>
          <div class="input-field">
            <label for="password-conf">New Password Confirmation</label>
            <input type="password" id="password-conf" name="password-conf" placeholder="$omeRea11y600DP@5$wuRd!">
          </div>
          <div class="row">
            <button type="submit" name="reset-pwd-submit" class="btn yellow darken-1 black-text waves-effect waves-light">Login</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>


<?php require('footer.php'); ?>