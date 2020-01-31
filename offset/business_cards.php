<?php $title = "business cards" ?>
<?php $description = "Hurry Up Print business cards, custom business cards, cards" ?>
<?php require('../head.php') ?>
<?php require('../header.php'); ?>

<div class="container">
  <!-- BREADCRUMBS -->
  <nav class="yellow darken-1 m2a">
    <div class="nav-wrapper ms2">
      <div class="col s12">
        <a href="/" class="breadcrumb grey-text text-lighten-1"><i class="material-icons">home</i></a>
        <!-- <a href="/offset/" class="breadcrumb grey-text text-lighten-1">Offset</a> -->
        <a class="breadcrumb black-text">Business Cards</a>
      </div>
    </div>
  </nav>
  <section class="business-card__section">
    <h1>Business Cards</h1>
    <div class="row">

      <!-- LEFT SIDE -->
      <div class='col s12 m12 l6 product-left'>
        <img src='../img/bcards.jpg' alt='business card' class='responsive-img'>
        <p>Standard 16pt Business Cards 3.5"w x 2"h</p>
        <p><b>Leave the right impression and get that call back.</b> Don't get caught without your
          business card, missing that opportunity to connect. You never know when you will have a chance
          meeting with someone and when you are prepared with all your contact info on a professional card,
          you will stand out.
        </p>
      </div>

      <!-- RIGHT SIDE -->
      <form action="bcard_order.inc.php" class="col s12 m12 l6 product-right mb2" id="bcard-form" method="POST">
        <input readonly locked type='text' hidden id='userId' name='userId' value="<?php
                                                                                    if (isset($_SESSION['id'])) {
                                                                                      echo $_SESSION['id'];
                                                                                    }
                                                                                    ?>">
        <div class="input-field col s12">
          <select name="sides" id="sides">
            <option value="single">Front only</option>
            <option value="double">Front and Back</option>
          </select>
          <label># of sides</label>
        </div>
        <div class="input-field col s12">
          <select name="corners" id="corners">
            <option value="no">No rounded corners</option>
            <option value="quarter">1/4" rounded corners</option>
            <option value="eighth">1/8" rounded corners</option>
          </select>
          <label>Rounded Corners</label>
        </div>
        <div class="input-field col s12">
          <select name="quantity" id="quantity">
            <option value="500">500</option>
            <option value="1000">1,000</option>
            <option value="1000">2,000</option>
            <option value="1000">3,000</option>
            <option value="1000">4,000</option>
            <option value="1000">5,000</option>
            <option value="1000">10,000</option>
          </select>
          <label>Quantity</label>
        </div>
        <div class="input-field col s12">
          <select name="finishing" id="finishing">
            <option value="gloss-aq">Gloss Aqueous Coating</option>
            <option value="matte-aq">Matte Aqueous Coating</option>
            <option value="uv1">High Gloss UV (front only)</option>
            <option value="uv2">High Gloss UV (Both sides)</option>
          </select>
          <label>Finishing</label>
        </div>
        <?php
        if (isset($_SESSION['id'])) {
          echo "
        <button 
        class='btn waves-effect waves-light yellow black-text'
        type='submit'
        id='bcard-submit'
        name='bcard-submit'
        >
        Add To Cart
      </button>
      ";
        } else {
          echo "
        <!-- Modal Trigger -->
        <a class='waves-effect waves-light btn modal-trigger' href='#loginModal'>Login</a>";
        }
        ?>
      </form>
    </div>


    <!-- START LOGIN MODAL -->

    <div id="loginModal" class="modal modal-fixed-footer">
      <div class="modal-content">
        <h4>Login</h4>
        <div class="col s12 m6">
          <form action="<?php echo htmlspecialchars('/includes/login.inc.php') ?>" method="post" class="card">
            <div class="card-content">
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
                <input type="email" id="email" name="email" placeholder="johndoe@email.com" class="validate"
                  value="<?php
                                                                                                                    if (isset($_GET['email'])) {
                                                                                                                      echo $_GET['email'];
                                                                                                                    }
                                                                                                                    ?>">
              </div>
              <div class="input-field">
                <label for="password">Password</label>
                <input type="password" id="password" name="pwd" placeholder="$k8vG3p09aB%77hn2^" class="validate">
              </div>
              <input type="hidden" id="bcard" name="bcard" value="bcard">
              <div class="row">
                <button type="submit" name="login-submit-lf"
                  class="modal-close btn yellow darken-1 black-text waves-effect waves-light">Login</button>
              </div>
              <div class="row">
                <?php
                if (isset($_GET['newpwd'])) {
                  if ($_GET["newpwd"] == "passwordupdated") {
                    echo '<p class="signupsuccess">Your password has been reset!</p>';
                  }
                }
                ?>
                <p>Forgot your password? <a href="../password_reset.php">Reset Password Here</a></p>

              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        New Customer?
        <a href="register.php" class="modal-close waves-effect waves-green btn-flat">register here</a>
      </div>
    </div>

    <!-- END LOGIN MODAL -->

  </section>
</div>

<?php require('../footer.php'); ?>