<nav class='yellow darken-1'>
  <div class='container'>
    <div class='nav-wrapper'>

      <!-- LOGO -->
      <a href="/" class="brand-logo">
        <img class="left" src="/img/hupLogoDrop.svg" width="30px" height="60px" alt="Hurry Up Print logo icon">
      </a>

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
          <a data-activates='off-dropdown' class='dropdown-button black-text' href='#!'>
            Offset
            <i class='material-icons right'>arrow_drop_down</i>
          </a>
        </li>
        <li>
          <a data-activates='gar-dropdown' class='dropdown-button black-text' href='#!'>
            Garments
            <i class='material-icons right'>arrow_drop_down</i>
          </a>
        </li>
        <li>
          <a data-activates='web-dropdown' class='dropdown-button black-text' href='#!'>
            Websites
            <i class='material-icons right'>arrow_drop_down</i>
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
              <i class='material-icons left'>person</i>
              <a class='black-text collapsible-header' href='#!'>
                My Account
                <i class='material-icons right'>arrow_drop_down</i>
              </a>
              <div class='collapsible-body'>
                <ul>
                  <?php
                  if (isset($_SESSION['email'])) {
                    echo '<li>
                      <form action="includes/logout.inc.php" method="post">
                        <button class="btn waves-effect waves-light white-text red ms2" name="logout-submit"
                          type="submit">Logout</button>
                      </form>
                    </li>';
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
              <a class='black-text collapsible-header' href='#!'>Large Format<i
                  class='material-icons right'>arrow_drop_down</i></a>
              <div class='collapsible-body'>
                <ul>
                  <li class='yellow darken-1'><a href='/large_format.php'>Large Format</a></li>
                  <li><a href='/large_format/banners.php'>Banners</a></li>
                  <li><a href='/large_format/magnets.php'>Magnets</a></li>
                  <li><a href='/large_format/decals.php'>Decals</a></li>
                  <li><a href='/large_format/vehicle_wraps.php'>Vehicle Wraps</a></li>
                  <li><a href='/large_format/window_perf.php'>Window Perf</a></li>
                  <li><a href='/large_format/displays.php'>Displays</a></li>
                  <li><a href='/large_format/signage.php'>Signage</a></li>
                  <li><a href='/large_format/posters.php'>Posters</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </li>

        <!-- OFFSET -->
        <li>
          <ul class='collapsible collapsible-accordion'>
            <li>
              <a class='black-text collapsible-header' href='#!'>Offset<i
                  class='material-icons right'>arrow_drop_down</i></a>
              <div class='collapsible-body'>
                <ul>
                  <li class='yellow darken-1'><a href='/offset.php'>Offest</a></li>
                  <li><a href='/offset/business_cards.php'>Business Cards</a></li>
                  <li><a href='/offset/postcards.php'>Postcards</a></li>
                  <li><a href='/offset/flyers.php'>Flyers</a></li>
                  <li><a href='/offset/invitations.php'>Invitations</a></li>
                  <li><a href='/offset/menus.php'>Menus</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </li>

        <!-- GARMENTS -->
        <li>
          <ul class='collapsible collapsible-accordion'>
            <li>
              <a class='black-text collapsible-header' href='#!'>
                Garments
                <i class='material-icons right'>arrow_drop_down</i>
              </a>
              <div class='collapsible-body'>
                <ul>
                  <li class='yellow darken-1'><a href='/garments.php'>Garments</a></li>
                  <li><a href='/garments/silk_screen.php'>Silk Screen</a></li>
                  <li><a href='/garments/embroidery.php'>Embroidery</a></li>
                  <li><a href='/garments/vinyl.php'>Vinyl</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </li>

        <!-- WEBSITES -->
        <li>
          <ul class='collapsible collapsible-accordion'>
            <li>
              <a class='black-text collapsible-header' href='#!'>
                Websites
                <i class='material-icons right'>arrow_drop_down</i>
              </a>
              <div class='collapsible-body'>
                <ul>
                  <li class='yellow darken-1'><a href='/websites.php'>Websites</a></li>
                  <li><a href='/websites/static_sites.php'>Static Websites</a></li>
                  <li><a href='/websites/dynamic_sites.php'>Dynamic Websites</a></li>
                  <li><a href='/websites/e-commerce_sites.php'>E-commerce Sites</a></li>
                  <li><a href='/websites/restaurant_sites.php'>Restaurants</a></li>
                  <li><a href='/websites/blog_sites.php'>Blog Sites</a></li>
                  <li><a href='/websites/applications.php'>Applications</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </li>
      </ul>

    </div>
  </div>
</nav>

<!-- DESKTOP DROPDOWNS -->
<ul id='lf-dropdown' class='dropdown-content'>
  <li class='yellow darken-1'><a href='/large_format.php'>Large Format</a></li>
  <li><a href='/large_format/banners.php'>Banners</a></li>
  <li><a href='/large_format/magnets.php'>Magnets</a></li>
  <li><a href='/large_format/decals.php'>Decals</a></li>
  <li><a href='/large_format/vehicle_wraps.php'>Vehicle Wraps</a></li>
  <li><a href='/large_format/window_perf.php'>Window Perf</a></li>
  <li><a href='/large_format/displays.php'>Displays</a></li>
  <li><a href='/large_format/signage.php'>Signage</a></li>
  <li><a href='/large_format/posters.php'>Posters</a></li>
</ul>
<ul id='off-dropdown' class='dropdown-content'>
  <li class='yellow darken-1'><a href='/offset.php'>Offset</a></li>
  <li><a href='/offset/business_cards.php'>Business Cards</a></li>
  <li><a href='/offset/postcards.php'>Postcards</a></li>
  <li><a href='/offset/flyers.php'>Flyers</a></li>
  <li><a href='/offset/invitations.php'>Invitations</a></li>
  <li><a href='/offset/menus.php'>Menus</a></li>
</ul>
<ul id='gar-dropdown' class='dropdown-content'>
  <li class='yellow darken-1'><a href='/garments.php'>Garments</a></li>
  <li><a href='/garments/silk_screen.php'>Silk Screen</a></li>
  <li><a href='/garments/embroidery.php'>Embroidery</a></li>
  <li><a href='/garments/vinyl.php'>Vinyl</a></li>
</ul>
<ul id='web-dropdown' class='dropdown-content'>
  <li class='yellow darken-1'><a href='/websites.php'>Websites</a></li>
  <li><a href='/websites/static_sites.php'>Static Websites</a></li>
  <li><a href='/websites/dynamic_sites.php'>Dynamic Websites</a></li>
  <li><a href='/websites/e-commerce_sites.php'>E-commerce Sites</a></li>
  <li><a href='/websites/restaurant_sites.php'>Restaurants</a></li>
  <li><a href='/websites/blog_sites.php'>Blog Sites</a></li>
  <li><a href='/websites/applications.php'>Applications</a></li>
</ul>
<ul id='acct-dropdown' class='dropdown-content'>
  <?php
  if (isset($_SESSION['email'])) {
    echo '<li>
    <form action="includes/logout.inc.php" method="post">
      <button class="btn waves-effect waves-light white-text red m1" name="logout-submit" type="submit">Logout</button>
    </form>
  </li>';
  } else {
    echo "<li><a href='/login.php'>Login</a></li>  
    <li><a href='/register.php'>Register</a></li>";
  }
  ?>

</ul>