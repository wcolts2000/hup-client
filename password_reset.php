<?php $title = 'Password Reset Request' ?>
<?php $description = 'Hurry Up Print password reset request page' ?>
<?php require('head.php') ?>

<?php require('header.php'); ?>

<div class="container m2a">
  <div class="row">
    <div class="col s12 m8 offset-m2">
      <div class="card">
        <div class="card-content">
          <h1 class="mb2">
            <span class="card-title">
              Reset Password
            </span>
          </h1>
          <p>An Email will be sent to you with instructions on how to reset your password.</p>
          <form action="/includes/reset-request.inc.php" method="post">
            <div class="input-field">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" placeholder="johnnyd@email.com">
            </div>
            <div class="row">
              <button type="submit" name="reset-request-submit" class="btn yellow darken-1 black-text waves-effect waves-light">Send</button>
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
    </div>
  </div>
</div>


<?php require('footer.php'); ?>