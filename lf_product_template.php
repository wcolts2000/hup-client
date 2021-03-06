<?php
include_once "includes/dbh.inc.php";
$sql = "SELECT * FROM product WHERE productName = '$productName';";
$stmt = mysqli_stmt_init($conn);
$cost = "";
$productId = "";
if (!mysqli_stmt_prepare($stmt, $sql)) {
  echo "SQL STATEMENT FAILED : ( !";
} else {
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
  while ($row = mysqli_fetch_assoc($result)) {
    $h1_title = str_replace("_", " ", $row['productName']);
    $cost = $row['productPrice'];
    $productId = $row['id'] ?>
<section class='<?php echo $row['productName'] ?>__section'>
  <h1>Custom <?php echo $h1_title ?></h1>
  <p id="success" class="green-text"><?php
                                          if (isset($_GET['cart'])) {
                                            if ($_GET['cart'] == "success") {
                                              echo "Item added to cart";
                                            }
                                          };
                                          echo "<script defer>
                                                  const successMessage = document.getElementById('success');
                                                  setTimeout(() => {
                                                    successMessage.textContent = '';
                                                  }, 3000);
                                                </script>"
                                          ?></p>
  <div id='error'></div>
  <div class='row'>

    <!-- LEFT SIDE -->
    <div class='col s12 m12 l4 product-left'>
      <img src='../img/<?php echo $row['imageName'] ?>' alt='<?php echo $row['imageAlt'] ?>' class='responsive-img p2'>
      <p><?php echo $row['productDescription'] ?></p>
    </div>

    <?php }
}
    ?>

    <!-- RIGHT SIDE -->
    <form autocomplete='off' class='col s12 m12 l8 product-right'
      action='<?php echo htmlspecialchars('../includes/product_calc.inc.php') ?>' id='product-form' method='POST'>
      <input type='text' hidden id='userId' name='userId' value="<?php
                                                                  if (isset($_SESSION['id'])) {
                                                                    echo $_SESSION['id'];
                                                                  }
                                                                  ?>">
      <input type='text' hidden id='total' name='total'>
      <input type='text' hidden id='cost' name='cost' value="<?php echo $cost ?>">
      <input type="hidden" name="currPage" value="<?php echo $productName ?>">
      <div class='row'>
        <h5 id='totalStr'>Total: $20.00</h5>
        <p class='red-text'>* Required Fields</p>
        <p id="error" class='red-text'><?php
                                        if (isset($_GET['error'])) {
                                          if ($_GET['error'] == "emptyfields") {
                                            echo "Please fill in all required fields";
                                          }
                                        };
                                        echo "<script>
                                                const errMessage = document.getElementById('error');
                                                setTimeout(() => {
                                                  errMessage.textContent = '';
                                                }, 3000);
                                              </script>"
                                        ?></p>
      </div>
      <div class='input-field col s6'>
        <input autocomplete='off' required id='length' value='12' type='text' name='length'>
        <label for='length'>Length In Inches <span class='red-text'>*</span></label>
      </div>
      <div class='input-field col s6'>
        <input autocomplete='off' required id='width' type='text' value='12' name='width'>
        <label for='width'>Width In Inches <span class='red-text'>*</span> </label>
      </div>
      <?php
      $sql = "SELECT * FROM product_selects WHERE productId = '$productId';";
      $stmt = mysqli_stmt_init($conn);
      $cost = "";
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "SQL STATEMENT FAILED : ( !";
      } else {
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        while ($row = mysqli_fetch_assoc($result)) {
          $selectId = $row['id'];
          $label = $row['label'];
      ?>
      <div class='input-field col s6'>
        <select required name='<?php echo $row['selectName'] ?>' id='<?php echo $row['selectName'] ?>'>
          <?php
              $sql2 = "SELECT * FROM select_options WHERE selectId = '$selectId';";
              $stmt2 = mysqli_stmt_init($conn);
              $cost = "";
              if (!mysqli_stmt_prepare($stmt2, $sql2)) {
                echo "SQL STATEMENT FAILED : ( !";
              } else {
                mysqli_stmt_execute($stmt2);
                $result2 = mysqli_stmt_get_result($stmt2);
                while ($row2 = mysqli_fetch_assoc($result2)) {
              ?>
          <option value='<?php echo $row2["optionKey"] ?>'><?php echo $row2['optionValue'] ?></option>
          <?php  }
              }
              ?>
        </select>
        <label><?php echo $label; ?> <span class='red-text'>*</span> </label>
      </div>
      <?php }
      }
      ?>
      <div class='input-field col s6'>
        <select required name='proof' id='proof'>
          <option value='none' selected>--None--</option>
          <option value='email'>Email Proof</option>
        </select>
        <label>Design Proof <span class='red-text'>*</span> </label>
      </div>
      <div class='input-field col s6'>
        <select required name='turnaround-x' id='turnaround-x'>
          <option value='standard' selected>2 - 3 Day</option>
          <option value='same'>Same Day</option>
        </select>
        <label>Turnaround <span class='red-text'>*</span> </label>
      </div>
      <div class='input-field col s6'>
        <input required id='jobid' type='text' name='jobid'>
        <label for='jobid'>Job Name <span class='red-text'>*</span> </label>
      </div>
      <div class='input-field col s6'>
        <input autocomplete='off' required id='quantity' type='text' name='quantity' value='1'>
        <label for='quantity'>Quantity <span class='red-text'>*</span> </label>
      </div>
      <?php
      if (isset($_SESSION['id'])) {
        echo "
      <button 
      class='btn waves-effect waves-light yellow black-text'
      type='submit'
      id='product-cart'
      name='product-cart'
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
              <input type="hidden" name="currPage" value="<?php echo $productName ?>">
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

  </div>
</section>

<script src="/js/product_calc.js"></script>