<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Hurry Up Print | Websites</title>
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
      <div class="parallax"><img src="img/macbook.png" alt="person using a macbook"></div>
      <h1 class="white-text ps2 ts">Custom Websites</h1>
      <h4 class="ps2 white-text ts">Get your website or application built.</h5>
        <a href="/garments/embroidery.php"
          class="round-border btn waves-effect waves-light yellow darken-2 black-text m2">Blog Sites Here
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
            <a href="/websites.php" class="breadcrumb black-text">Websites</a>
          </div>
        </div>
      </nav>

      <!-- PRODUCTS -->
      <div class="col s12">
        <h4>Have an online presence. Go global</h4>
        <div class="row">
          <div class="col s6">
            <img src="img/app.jpg" alt="person using a tablet" class="responsive-img">
          </div>
          <div class="col s6">
            <ul class="collection">
              <a href="/websites/static_sites.php" class="collection-item black-text waves-effect waves-light">
                <li>Static Sites</li>
              </a>
              <a href="/websites/dynamic_sites.php" class="collection-item black-text waves-effect waves-light">
                <li>Dynamic Sites</li>
              </a>
              <a href="/websites/e-commerce_sites.php" class="collection-item black-text waves-effect waves-light">
                <li>E-commerce Sites</li>
              </a>
              <a href="/websites/restaurant_sites.php" class="collection-item black-text waves-effect waves-light">
                <li>Restaurant Sites</li>
              </a>
              <a href="/websites/blog_sites.php" class="collection-item black-text waves-effect waves-light">
                <li>Blog Sites</li>
              </a>
              <a href="/websites/applications.php" class="collection-item black-text waves-effect waves-light">
                <li>Apps</li>
              </a>
            </ul>
          </div>
        </div>


    </main>

    <!-- INFO DROPDOWNS -->
    <section class="info row">
      <div class="col s12">
        <h5>Some Frequently Asked Questions about Website and Application Development</h5>
      </div>
      <div class="col s12 m6">
        <ul class="collapsible">
          <li>
            <div class="collapsible-header"><i class="material-icons teal-text">arrow_drop_down_circle</i>Do I need to
              know anything about coding to have a website?</div>
            <div class="collapsible-body"><span>Absolutely not. Any level of experience will do. If you can log into
                your email and navigate a basic website, we can set
                you up to be able to add anything you want to your site once we build it depending on how much you want
                to be able to modify it.</span></div>
          </li>
          <li>
            <div class="collapsible-header"><i class="material-icons teal-text">arrow_drop_down_circle</i>What about
              free services like wix?</div>
            <div class="collapsible-body"><span>While there are free services out there to quickly get a basic site
                started, these free platforms give very limited customization
                and personalization abilities. That being said, if you just don't have the time to learn them yourself
                or are intimidated by the prospect of doing it, our professional
                developers can help get you going. Check our pricing to find your fit.
              </span></div>
          </li>
          <li>
            <div class="collapsible-header"><i class="material-icons teal-text">arrow_drop_down_circle</i>What's the
              difference between a static and a dynamic site?</div>
            <div class="collapsible-body"><span>A static site has information that does change or infrequently changes
                and does not change based on the users actions.
                A dynamic site is pulling data or information from an outside source or database and is affected by user
                interactions. If your site has a login system or
                an e-commerce type site with shopping carts, etc. it is a dynamic site.
              </span></div>
          </li>
        </ul>
      </div>
      <div class="col s12 m6">
        <ul class="collapsible">
          <li>
            <div class="collapsible-header"><i class="material-icons teal-text">arrow_drop_down_circle</i>What about
              when I need changes?</div>
            <div class="collapsible-body"><span>That depends on how the site is created. If you have a site created by
                us with a CMS (Content Management System) being utilized,
                there will be easy options for you to add new info or modify existing info on your site. If you prefer a
                hands off approach, we have packages available.
              </span></div>
          </li>
          <li>
            <div class="collapsible-header"><i class="material-icons teal-text">arrow_drop_down_circle</i>Can you get me
              ranking on Google?</div>
            <div class="collapsible-body"><span>SEO, or Search Engine Optimization, is a timely and extensive process
                that depends on numerous factors. Rankings depend on the
                industry and key terms you are trying to get noticed with. There are packages available, but do note
                that it is not an overnight thing. Rankings can take up to 6
                months or more depending on the competition.
              </span></div>
          </li>
          <li>
            <div class="collapsible-header"><i class="material-icons teal-text">arrow_drop_down_circle</i>What if I
              already have a site but want it updated or remade?</div>
            <div class="collapsible-body"><span>No problem. Our team can help get your site to where it needs to be or
                start fresh and get you something brand new,
                centered around customer conversions.
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