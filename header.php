<nav class='yellow'>
  <!-- <div class='container'> -->
  <div class='nav-wrapper ps2'>

    <!-- LOGO -->
    <a href="/" class="brand-logo">
      <img class="left" src="/img/hupLogoDrop.svg" width="30px" height="60px" alt="Hurry Up Print logo icon">
    </a>
    <ul class="right ps2">
      <li id="cart-link">
        <a class='black-text' href='/user/shopping_cart.php'>
          <i class='material-icons'>shopping_cart</i>
        </a>
        <p id="cart">
          <?php
          if (isset($_SESSION['id'])) {
            if (file_exists('includes/dbh.inc.php')) {
              $filepath = 'includes/dbh.inc.php';
            } else {
              $filepath = '../includes/dbh.inc.php';
            }
            require_once $filepath;
            $userId = $_SESSION['id'];
            $sql = "SELECT * FROM shopping_cart WHERE userId=$userId;";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
              header("Location: ../" . $_SERVER['REQUEST_URI'] . ".php?error=sqlerror");
              exit();
            } else {
              mysqli_stmt_execute($stmt);
              mysqli_stmt_store_result($stmt);
              $itemCount = mysqli_stmt_num_rows($stmt);
              echo $itemCount;
            }
          } else {
            echo "0";
          }
          ?>
        </p>
      </li>
    </ul>

    <!-- HAMBURGER -->
    <a class='button-collapse black-text' data-activates='mobile-nav' href='#'>
      <i class='material-icons'>menu</i>
    </a>

    <!-- RIGHT NAV DESKTOP -->
    <ul class='right hide-on-med-and-down'>
      <li>
        <a data-activates='lf-dropdown' class='dropdown-button black-text' href='#!'>
          Large Format
          <i class='material-icons right'>arrow_drop_down</i>
        </a>
      </li>
      <li>
        <a class='black-text' href="/offset/business_cards.php">Business Cards</a>
      </li>
      <li>
        <a class='black-text' href='/garments/'>
          Garments
        </a>
      </li>
      <li>
        <a class='black-text' href='/websites/'>
          Websites
        </a>
      </li>
      <li>
        <a data-activates='acct-dropdown' class='dropdown-button black-text' href='#!'>
          <i class='material-icons tiny left'>person</i>
          My Account
          <i class='material-icons right'>arrow_drop_down</i>
        </a>
      </li>
    </ul>

    <!-- MOBILE SIDE NAV -->
    <ul class='side-nav' id='mobile-nav'>

      <!-- MY ACCOUNT -->
      <li>
        <ul class='collapsible collapsible-accordion'>
          <li>
            <a class='black-text collapsible-header' href='#!'>
              <i class='material-icons left'>person</i>
              My Account
            </a>
            <div class='collapsible-body'>
              <ul>
                <?php
                if (isset($_SESSION['email'])) {
                  if (file_exists('includes/logout.inc.php')) {
                    $filepath = 'includes/logout.inc.php';
                  } else {
                    $filepath = '../includes/logout.inc.php';
                  }
                  echo '<li>
                      <form action="' . htmlspecialchars($filepath) . '" method="post">
                        <button class="btn waves-effect waves-light black-text yellow ms2" name="logout-submit"
                          type="submit">Logout</button>
                      </form>
                    </li>';
                  if (isset($_SESSION['admin'])) {
                    echo '<li>
                              <a href="/admin/"><button class="black-text btn waves-effect waves-light yellow">Admin Panel</button></a>
                            </li>';
                  }
                } else {
                  echo "<li><a href='/login.php'>Login</a></li>                  
                      <li><a href='/register.php'>Register</a></li>";
                }
                ?>
              </ul>
            </div>
          </li>
        </ul>
      </li>

      <!-- LARGE FORMAT -->
      <li>
        <ul class='collapsible collapsible-accordion'>
          <li>
            <a class='black-text collapsible-header active' href='#!'>
              <i class='material-icons left'>aspect_ratio</i>
              Large Format
            </a>
            <div class='collapsible-body'>
              <ul>
                <li class='yellow '><a href='/large_format/'>Large Format</a></li>
                <li><a href='/large_format/banners.php'>Banners</a></li>
                <li><a href='/large_format/decals.php'>Decals</a></li>
                <li><a href='/large_format/posters.php'>Posters</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </li>

      <!-- OFFSET -->
      <li>
        <a class='black-text collapsible-header' href='/offset/business_cards.php'>
          <i class='material-icons left'>print</i>
          Business Cards
        </a>
      </li>

      <!-- GARMENTS -->
      <li>
        <a class='black-text collapsible-header' href='/garments/'>
          <i class='material-icons left'>style</i>
          Garments
        </a>
      </li>

      <!-- WEBSITES -->
      <li>
        <a class='black-text collapsible-header' href='/websites/'>
          <i class='material-icons left'>important_devices</i>
          Websites
        </a>
      </li>
    </ul>

  </div>
  <!-- </div> -->
</nav>

<!-- DESKTOP DROPDOWNS -->
<ul id='lf-dropdown' class='dropdown-content'>
  <li class='yellow '><a href='/large_format/'>Large Format</a></li>
  <li><a href='/large_format/banners.php'>Banners</a></li>
  <li><a href='/large_format/decals.php'>Decals</a></li>
  <li><a href='/large_format/posters.php'>Posters</a></li>
</ul>
<ul id='acct-dropdown' class='dropdown-content'>
  <?php
  if (isset($_SESSION['email'])) {
    if (file_exists('includes/logout.inc.php')) {
      $filepath = 'includes/logout.inc.php';
    } else {
      $filepath = '../includes/logout.inc.php';
    }
    echo '<li>
          <form action="' . htmlspecialchars($filepath) . '" method="post">
            <button class="btn waves-effect waves-light black-text yellow m1c" name="logout-submit" type="submit">Logout</button>
          </form>
        </li>';
    if (isset($_SESSION['admin'])) {
      echo '<li>
    <a href="/admin/"><button class="btn black-text waves-effect waves-light yellow">Admin</button></a>
  </li>';
    }
  } else {
    echo "<li><a href='/login.php'>Login</a></li>  
    <li><a href='/register.php'>Register</a></li>";
  }
  ?>

</ul>