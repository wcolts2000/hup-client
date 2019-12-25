<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Hurry Up Print | Garment Printing</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="css/styles.css" />
  <link rel="icon" href="img/favicon.png" sizes="32x32">
</head>

<body>
  <?php include 'header.php'; ?>

  <!-- HEADER -->
  <div class="lf-header">
    <div class="parallax-container page-header center-align">
      <div class="parallax"><img src="img/embroidery_machines.png" alt="embroidery machines"></div>
      <h1 class="white-text ps2 ts">Custom Garments</h1>
      <h4 class="ps2 white-text ts">Get your logo on your uniforms and clothing.</h5>
        <a href="/garments/embroidery.php"
          class="round-border btn waves-effect waves-light yellow darken-2 black-text m2">Embroidery Here
          <i class="material-icons black-text right">chevron_right</i>
        </a>
    </div>
  </div>

  <!-- CONTAINER -->
  <div class="container">

    <!-- MAIN -->
    <main class="lf-main">

      <!-- BREADCRUMBS -->
      <nav class="yellow darken-2 m2a">
        <div class="nav-wrapper ms2">
          <div class="col s12">
            <a href="/index.php" class="breadcrumb"><i class="material-icons">home</i></a>
            <a href="/garments.php" class="breadcrumb black-text">Garments</a>
          </div>
        </div>
      </nav>

      <!-- PRODUCTS -->
      <div class="col s12">
        <h4>Advertise Everywhere You Go.</h4>
        <div class="row">
          <div class="col s6">
            <img src="img/shirt_front_print_2.png" alt="a custom silkscreened logo on a shirt front"
              class="responsive-img">
          </div>
          <div class="col s6">
            <ul class="collection">
              <a href="/garments/silk_screen.php" class="collection-item black-text waves-effect waves-light">
                <li>Silk Screen Printing</li>
              </a>
              <a href="/garments/embroidery.php" class="collection-item black-text waves-effect waves-light">
                <li>Embroidery</li>
              </a>
              <a href="/garments/vinyl.php" class="collection-item black-text waves-effect waves-light">
                <li>Vinyl</li>
              </a>
            </ul>
          </div>
        </div>
      </div> <!-- END PRODUCTS -->

    </main>

    <!-- INFO DROPDOWNS -->
    <section class="info row">
      <div class="col s12">
        <h5>Some Frequently Asked Questions about Garment Printing</h5>
      </div>
      <div class="col s12 m6">
        <ul class="collapsible">
          <li>
            <div class="collapsible-header"><i class="material-icons teal-text">arrow_drop_down_circle</i>What is
              minimum order?</div>
            <div class="collapsible-body"><span>Depending on what type of garment service you get the minimums will
                vary. If you are looking for silk screen printing,
                the minimum order will be a dozen (12) garments per design. Bulk pricing breaks decrease the price per
                unit as the order number increases on silk screen jobs.
                Color changes are allowed on the same design but do add an additional fee. With Embroidery, you can get
                an number of garments or accessories embroidered.
                Digitizing fees for the artwork may apply. With vinyl presses you may get as may as you like as well,
                but no bulk pricing will apply.</span></div>
          </li>
          <li>
            <div class="collapsible-header"><i class="material-icons teal-text">arrow_drop_down_circle</i>Can i get
              front and backs done?</div>
            <div class="collapsible-body"><span>Depending on the garment, most areas are able to be printed or
                embroidered on, but each location is charged accordingly.
                if there is a size difference needed on prints between garments, additional fees may apply</span></div>
          </li>
          <li>
            <div class="collapsible-header"><i class="material-icons teal-text">arrow_drop_down_circle</i>What colors
              are offered?</div>
            <div class="collapsible-body"><span>We can get nearly any color, but some metallics and specialty inks or
                threads will add prices and require a custom quote.</span></div>
          </li>
        </ul>
      </div>
      <div class="col s12 m6">
        <ul class="collapsible">
          <li>
            <div class="collapsible-header"><i class="material-icons teal-text">arrow_drop_down_circle</i>Is there a
              discount the more I order?</div>
            <div class="collapsible-body"><span>With silk screen printing, there are price breaks as varying quantities.
                The more you get, the more you save.
                With embroidery, the pricing is based on the size and stitch count of the graphic. With vinyl press, the
                pricing is per unit.
              </span></div>
          </li>
          <li>
            <div class="collapsible-header"><i class="material-icons teal-text">arrow_drop_down_circle</i>What if I want
              different colors on some?</div>
            <div class="collapsible-body"><span>With silk screen prints, there is a $15.00 color change fee on each
                change to the original color. With embroidery and vinyl presses,
                there is no additional fee unless the color is special ordered or out of stock.
              </span></div>
          </li>
          <li>
            <div class="collapsible-header"><i class="material-icons teal-text">arrow_drop_down_circle</i>Can I get the
              garments from you or do I provide them?</div>
            <div class="collapsible-body"><span>Both options are acceptable. If you have the garments you want
                customized already, you can ship them to us or drop them off if you are local.
                If you need the garments supplied, we have a wide selection of brands and styles to choose from at a
                great price.
              </span></div>
          </li>
        </ul>
      </div>
    </section>

  </div> <!-- END CONTAINER -->

  <?php include 'footer.php' ?>

  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script src="js/index.js"></script>
</body>

</html>