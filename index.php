<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
      Hurry Up Print | Websites, Banners, Business Cards, Flyers, Vehicle Wraps,
      Garment Printing
    </title>
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link
      type="text/css"
      rel="stylesheet"
      href="css/materialize.min.css"
      media="screen,projection"
    />
    <link type="text/css" rel="stylesheet" href="css/styles.css" />
    <link rel="icon" href="img/favicon.png" sizes="32x32">
  </head>
  <body>

    <?php include 'header.php';
    require __DIR__ . '/vendor/autoload.php';
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
    ?>


    <div class="home container">



    <section class="home-hero row">
      <div class="center-align wrapper">
          <img class="responsive-img" src="img/HUP web banner OFFSET.jpg" />
        <!-- <img
          class="responsive-img"
          style="padding: 0 2.4rem;"
          src="img/hup_logo.png"
          width="400"
          alt="Hurry Up Print logo"
        /> -->
      </div>
    </section>


    <main class="home-main white">
      <div class="row">

      <h3>Handle all your printing needs here</h3>
      <div class="divider"></div>
      <br>

      <!-- CARDS -->
      <div class="col s12 m6 l3">
        <a class="black-text" href="large_format.html">
        <!-- CARD WITH IMAGE -->
        <div class="card">
          <div class="card-image">
            <img src="img/street-signage-3.jpg" alt="card image">
          </div>
          <div class="card-content">
            <span class="card-title">Large Format</span>
            
            <ul>
              <li>Banners</li>
              <li>Vehicle Wraps</li>
              <li>Window Perf</li>
              <li>and more...</li>
            </ul>
          </div>
          <div class="card-action yellow darken-1">
            <a href="#" class="black-text">Shop here &rarr;</a>
          </div>
        </div>
      </a>
      </div>


      <div class="col s12 m6 l3">
<a class="black-text" href="offset.html">
        <!-- CARD WITH IMAGE -->
        <div class="card">
          <div class="card-image">
            <img src="img/bcards.jpg" alt="card image">
          </div>
          <div class="card-content">
            <span class="card-title">Offset</span>
            
            <ul>
              <li>Business Cards</li>
              <li>Postcards</li>
              <li>Flyers</li>
              <li>and more...</li>
            </ul>
          </div>
          <div class="card-action yellow darken-1">
            <a href="#" class="black-text">Shop here &rarr;</a>
          </div>
        </div>
        </a>
      </div>
      <div class="col s12 m6 l3">
        <a class="black-text" href="garments.html">
        <!-- CARD WITH IMAGE -->
        <div class="card">
          <div class="card-image">
            <img src="img/embroidery-machine.jpg" alt="card image">
          </div>
          <div class="card-content">
            <span class="card-title">Garments</span>
            
            <ul>
              <li>Silk Screening</li>
              <li>Embroidery</li>
              <li>Vinyl</li>
              <li>and more...</li>
            </ul>
          </div>
          <div class="card-action yellow darken-1">
            <a href="#" class="black-text">Shop here &rarr;</a>
          </div>
        </div>
        </a>
      </div>
      <div class="col s12 m6 l3">
        <a class="black-text" href="websites.html">
        <!-- CARD WITH IMAGE -->
        <div class="card">
          <div class="card-image">
            <img src="img/web-design.jpg" alt="card image">
          </div>
          <div class="card-content">
            <span class="card-title">Websites</span>
            
            <ul>
              <li>Static Sites</li>
              <li>Dynamic Sites</li>
              <li>E-commerce</li>
              <li>and more...</li>
            </ul>
          </div>
          <div class="card-action yellow darken-1">
            <a href="#" class="black-text">Shop here &rarr;</a>
          </div>
        </div>
      </a>
      </div>
    </div>

      <!-- collapsibles -->
      <div class="row">
        <ul class="collapsible" data-collapsible="expandable">
          <li>
            <div class="collapsible-header  active">
              <i class="material-icons">panorama</i>Large Format
            </div>
            <div class="collapsible-body">
              <p class="row">For those big jobs, our large format division has you handled.<p>
              <a href="#!" class="chip pink white-text waves-effect waves-light">Banners</a>
              <a href="#!" class="chip pink white-text waves-effect waves-light">Magnets</a>
              <a href="#!" class="chip pink white-text waves-effect waves-light">Decals</a>
              <a href="#!" class="chip pink white-text waves-effect waves-light">Vehicle Wraps</a>
              <a href="#!" class="chip pink white-text waves-effect waves-light">Window Perf</a>
              <a href="#!" class="chip pink white-text waves-effect waves-light">Displays</a>
              <a href="#!" class="chip pink white-text waves-effect waves-light">Signage</a>
              <a href="#!" class="chip pink white-text waves-effect waves-light">Posters</a>
            </div>
          </li>
          <li>
            <!-- pre-select -->
            <div class="collapsible-header">
              <i class="material-icons">insert_photo</i>Offset
            </div>
            <div class="collapsible-body">
              <p>For all your smaller business advertising needs</p>
              <a href="#!" class="chip pink white-text waves-effect waves-light">Business Cards</a>
              <a href="#!" class="chip pink white-text waves-effect waves-light">Postcards</a>
              <a href="#!" class="chip pink white-text waves-effect waves-light">Flyers</a>
              <a href="#!" class="chip pink white-text waves-effect waves-light">Invitations</a>
              <a href="#!" class="chip pink white-text waves-effect waves-light">Menus</a>
            </div>
          </li>
          <li>
            <div class="collapsible-header">
              <i class="material-icons">color_lens</i>Garments
            </div>
            <div class="collapsible-body">
              <p>For all your garment customizations</p>
              <a href="#!" class="chip pink white-text waves-effect waves-light">Silk Screen Printing</a>
              <a href="#!" class="chip pink white-text waves-effect waves-light">Embroidery</a>
              <a href="#!" class="chip pink white-text waves-effect waves-light">Vinyl</a>
            </div>
          </li>
          <li>
            <div class="collapsible-header">
              <i class="material-icons">devices</i>Websites
            </div>
            <div class="collapsible-body">
              <p>For all your website and app needs</p>
              <a href="#!" class="chip pink white-text waves-effect waves-light">Static Sites</a>
              <a href="#!" class="chip pink white-text waves-effect waves-light">Dynamic Sites</a>
              <a href="#!" class="chip pink white-text waves-effect waves-light">E-commerce Sites</a>
              <a href="#!" class="chip pink white-text waves-effect waves-light">Restaurant Sites</a>
              <a href="#!" class="chip pink white-text waves-effect waves-light">Blog Sites</a>
              <a href="#!" class="chip pink white-text waves-effect waves-light">Apps</a>
            </div>
          </li>
        </ul>
      </div>
    </main>
      


      <div class="parallax-container">
        <div class="parallax"><img src="img/maps.jpg" alt="a table of old maps"></div>

        <div class="container">

          <form class="white" id="form">
            <div class="input-field">
              <input id="email" type="email" autocomplete="on" />
              <label for="email">email</label>
            </div>
            <div class="input-field">
              <input id="password"  type="password" autocomplete="on" />
              <label for="password">password</label>
            </div>
            
            <input id="form-submit" type="submit" value="submit" />
          </form>
        </div>
      </div>

    </div> <!--END CONTAINER -->

    <!-- FOOTER -->
    <footer class="page-footer cyan darken-1">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Footer Content</h5>
            <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
          </div>
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Links</h5>
            <ul>
              <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        © 2019 Copyright | Hurry Up Print
        <a class="grey-text text-lighten-4 right" href="mailto:sales@hurryupprint.com">
          <i class="material-icons left">email</i>
          sales@hurryupprint.com
        </a>
        </div>
      </div>
    </footer>

    <!--Import jQuery before materialize.js-->
    <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-3.2.1.min.js"
    ></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="js/index.js"></script>
  </body>
</html>
