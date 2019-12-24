<nav class='yellow darken-1'>
  <div class='container'>
    <div class='nav-wrapper'> <a class='button-collapse black-text' data-activates='mobile-nav' href='#'>
        <i class='material-icons'>menu</i></a>
      <ul class='right hide-on-med-and-down'>
        <li><a data-activates='lf-dropdown' class='dropdown-button black-text' href='#!'>Large Format<i class='material-icons right'>arrow_drop_down</i></a></li>
        <li><a data-activates='off-dropdown' class='dropdown-button black-text' href='#!'>Offset<i class='material-icons right'>arrow_drop_down</i></a></li>
        <li> <a data-activates='gar-dropdown' class='dropdown-button black-text' href='#!'>Garments<i class='material-icons right'>arrow_drop_down</i></a></li>
        <li><a data-activates='web-dropdown' class='dropdown-button black-text' href='#!'>Websites<i class='material-icons right'>arrow_drop_down</i></a></li>
        <li><a id='login' href='/login.php' class='btn black waves-effect waves-light'>Login</a></li>
        <li><a href='/dashboard.php' class=' black-text' id='avatar'><i class='material-icons tiny'>person</i></a></li>
      </ul>
      <ul class='side-nav' id='mobile-nav'>
        <ul class='collapsible collapsible-accordion'>
          <li>
            <div class='user-view'>
              <div class='background'>
                <img src='/img/bg.jpg' />
              </div>
              <a href='/dashboard.php'><i class='material-icons black-text'>person</i></a>
              <a href='/dashboard.php'><span class='black-text name'>John Doe</span></a>
              <a href='/dashboard.php'><span class='black-text email'>jdandturk@gmail.com</span></a>
            </div>
          </li>
          <li>
            <a class='black-text collapsible-header' href='#!'>Large Format<i class='material-icons right'>arrow_drop_down</i></a>
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
        <ul class='collapsible collapsible-accordion'>
          <li>
            <a class='black-text collapsible-header' href='#!'>Offset<i class='material-icons right'>arrow_drop_down</i></a>
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

        <ul class='collapsible collapsible-accordion'>
          <li>
            <a class='black-text collapsible-header' href='#!'>Garments<i class='material-icons right'>arrow_drop_down</i></a>
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
        <ul class='collapsible collapsible-accordion'>
          <li>
            <a class='black-text collapsible-header' href='#!'>Websites<i class='material-icons right'>arrow_drop_down</i></a>
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
        <li><a href='/login.php' id='login' class='btn btn-small waves-effect waves-light' style='margin: 0 15px;'>Login</a>
        </li>
        <li><a href='/dashboard.php' class=' btn waves-effect waves-light' id='avatar'>User Settings<i class='material-icons white-text'>person</i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
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