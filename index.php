<?php $title = "Websites, Banners, Business Cards, Flyers, Vehicle Wraps,
    Garment Printing" ?>
<?php $description = "Online Printing Professionals specializing in large format and digital printing for all your marketing needs" ?>
<?php require('head.php') ?>


<?php require 'header.php'; ?>


<section class="home-hero row">
  <div class="parallax-container">
    <div class="parallax"><img src="img/printing-house.jpg"></div>
    <div class="center-align">

      <img src="img/hup_logo.png" alt="Hurry Up Print logo" class="m2a"
        style="max-width: 600px; width: 100%; margin: 6rem auto">
    </div>
  </div>
</section>
<div class="home container">

  <?php
  if (isset($_GET['newsletter'])) {
    if ($_GET['newsletter'] === "subscribed") {
      echo "<h5 id='toast' class='green-text yellow lighten-4 p2'>
          Thank You, " . $_GET['email'] . " has been added to our newsletter mailer list</h5>
          <script>
            const toast = document.getElementById('toast');
            setTimeout((() => toast.style.display =  'none') , 3000)</script>
        ";
    }
  }
  if (isset($_GET['websiterequest'])) {
    echo "<h5 id='toast' class='green-text yellow lighten-4 p2'>
      Thank you, your request has been submitted</h5>
      <script>
        const toast = document.getElementById('toast');
        setTimeout((() => toast.style.display =  'none') , 3000)</script>
    ";
  }
  ?>

  <main class="home-main white">

    <!-- ICON BANNER -->
    <div class="m2a">&nbsp;</div>
    <div class="row hide-on-small-only m4a">
      <div class="col s4 center-align pink-text p2">
        <i class="material-icons large">access_time</i>
        <h5>Fast Turnarounds</h5>
      </div>
      <div class="col s4 center-align pink-text p2">
        <i class="material-icons large">grade</i>
        <h5>Premium Products</h5>
      </div>
      <div class="col s4 center-align pink-text p2">
        <i class="material-icons large">thumb_up</i>
        <h5>Quality Assurance</h5>
      </div>
    </div>

    <!-- PRODUCT CATEGORIES -->
    <div class="row">
      <h3>Product Categories</h3>
    </div>

    <!-- CATEGORY TABS -->
    <div class="row">
      <div class="col s12">
        <ul class="tabs">
          <li class="tab col s3 active"><a href="#category1" class="black-text">LARGE FORMAT</a></li>
          <!-- <li class="tab col s3"><a href="#category2" class="black-text">OFFSET</a></li> -->
          <li class="tab col s3"><a href="#category2" class="black-text">BUSINESS CARDS</a></li>
          <li class="tab col s3"><a href="#category3" class="black-text">GARMENTS</a></li>
          <li class="tab col s3"><a href="#category4" class="black-text">WEBSITES</a></li>
        </ul>
      </div>
      <div id="category1" class="col s12">
        <div class="col s12">
          <p>Large Format | For Those Big Jobs</p>
        </div>
        <div class="row">
          <div class="col s6">
            <img src="img/lupitas-windows-1-card.png" alt="window decals on a mexican restaurant"
              class="responsive-img">
            <p>Advertise big with our banners and window perf. Get your business noticed with Vehicle Wraps or decals.
              We can quickly get you visible with our signage and displays.</p>
          </div>
          <div class="col s6">
            <ul class="collection">
              <a href="/large_format/banners.php" class="black-text waves-effect waves-light collection-item">
                <li>Banners</li>
              </a>
              <a href="/large_format/decals.php" class="collection-item black-text waves-effect waves-light">
                <li>Decals</li>
              </a>
              <a href="/large_format/posters.php" class="collection-item black-text waves-effect waves-light">
                <li>Posters</li>
              </a>
            </ul>
          </div>
        </div>
      </div>
      <div id="category2" class="col s12">
        <div class="col s12">
          <p>Offset | Business Cards</p>
        </div>
        <div class="row">
          <div class="col s6">
            <img src="img/premium-business-card-1-card.png" alt="fancy business cards" class="responsive-img">
            <p>Never miss a connection opportunity. Be sure to have your business cards at all times.</p>
          </div>
          <div class="col s6">
            <ul class="collection">
              <a href="/offset/business_cards.php" class="collection-item black-text waves-effect waves-light">
                <li>
                  Business Cards
                </li>
              </a>
            </ul>
          </div>
        </div>
      </div>
      <div id="category3" class="col s12">
        <div class="col s12">
          <p>Garments | Customize you shirts and more</p>
        </div>
        <div class="row">
          <div class="col s6">
            <img src="img/embroidered-hat-card.png" alt="a custom embroidered hat" class="responsive-img">
            <p>Take your clothing to the next level and get them custom printed or embroidered.</p>
          </div>
          <div class="col s6">
            <ul class="collection">
              <a href="/garments/" class="collection-item black-text waves-effect waves-light">
                <li>Garments</li>
              </a>
            </ul>
          </div>
        </div>
      </div>
      <div id="category4" class="col s12">
        <div class="col s12">
          <p>Websites | Get your site built today.</p>
        </div>
        <div class="row">
          <div class="col s6">
            <img src="img/web-design-card.jpg" alt="a display of web pages" class="responsive-img">
            <p>Get your custom website or native application built today. Take you company worldwide and advertise on
              the internet</p>
          </div>
          <div class="col s6">
            <ul class="collection">
              <a href="/websites/" class="collection-item black-text waves-effect waves-light">
                <li>Websites</li>
              </a>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </main>

  <div class="row">
    <div class="col s12">
      <!-- WEBSITE BANNER -->
      <?php include './components/web-banner.php' ?>
    </div>
  </div>

  <section class="home-section-partners center-align pink">
    <div class="row white-text">
      <h4>check out some satisfied clients</h4>
    </div>
    <div class="row white-text">
      <div class="col s6">
        <a class="white-text" href="https://proclubshop.com" target="_blank" rel="nofollow noreferrer">
          <i class="material-icons large">loyalty</i>
          <h5>FTL</h5>
          <p>Urban Attire, Gifts, and Paints</p>
        </a>
      </div>
      <div class="col s6">
        <a class="white-text" href="https://nnnsllc.com" target="_blank" rel="nofollow noreferrer">
          <i class="material-icons large">wifi</i>
          <h5>NNNS</h5>
          <p>Wifi Networking and Admin Services</p>
        </a>
      </div>
    </div>
  </section>

  <section class="home-section -cards">
    <!-- CARDS -->
    <div class="row">
      <div class="col s12 m6 l3">
        <a class="black-text" href="large_format.php">
          <!-- CARD WITH IMAGE -->
          <div class="card">
            <div class="card-image">
              <img src="img/street-signage-3.jpg" alt="card image">
            </div>
            <div class="card-content">
              <span class="card-title">Large Format</span>

              <ul>
                <li>Banners</li>
                <li>Posters</li>
                <li>Decals</li>
              </ul>
            </div>
            <div class="card-action yellow darken-1">
              <a href="/large_format/" class="black-text">Shop&nbsp;here</a>
            </div>
          </div>
        </a>
      </div>
      <div class="col s12 m6 l3">
        <a class="black-text" href="offset.php">
          <!-- CARD WITH IMAGE -->
          <div class="card">
            <div class="card-image">
              <img src="img/bcards.jpg" alt="card image">
            </div>
            <div class="card-content">
              <span class="card-title">Offset</span>

              <ul>
                <li>Business Cards</li>
                <li>&nbsp;</li>
                <li>&nbsp;</li>
              </ul>
            </div>
            <div class="card-action yellow darken-1">
              <a href="/offset/business_cards.php" class="black-text">Shop&nbsp;here</a>
            </div>
          </div>
        </a>
      </div>
      <div class="col s12 m6 l3">
        <a class="black-text" href="/garments/">
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
              </ul>
            </div>
            <div class="card-action yellow darken-1">
              <a href="/garments/" class="black-text">Shop&nbsp;here</a>
            </div>
          </div>
        </a>
      </div>
      <div class="col s12 m6 l3">
        <a class="black-text" href="websites.php">
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
                <li>and more...</li>
              </ul>
            </div>
            <div class="card-action yellow darken-1">
              <a href="/websites/" class="black-text">Shop&nbsp;here</a>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>

</div>
<!--END CONTAINER -->

<!-- MAILER LIST FORM -->
<?php require './components/mailer_list.php'; ?>

<!-- GOOGLE MAP -->
<div class="video-container map">
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12311.951650900202!2d-119.8031856!3d39.5147625!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa5f2d1bf75a8660a!2sHurry%20Up%20Print!5e0!3m2!1sen!2sus!4v1577959090285!5m2!1sen!2sus"
    width="1200" height="200" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div>

<?php require "footer.php" ?>