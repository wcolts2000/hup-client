<?php $title = 'Business Card Gallery' ?>
<?php $description = 'Hurry Up Print Business Card Designs' ?>
<?php require('../head.php') ?>

<?php require('../header.php'); ?>
<div class="container m2a">
  <h1>Business Card Designs</h1>
  <section class="business-card-gallery">
    <div class="row">
      <div class="bcard-gallery">
        <a href="#!">
          <div></div>
          <h3>Business Card Title</h3>
        </a>
        <a href="#!">
          <div></div>
          <h3>Business Card Title</h3>
        </a>
        <a href="#!">
          <div></div>
          <h3>Business Card Title</h3>
        </a>
        <a href="#!">
          <div></div>
          <h3>Business Card Title</h3>
        </a>
        <a href="#!">
          <div></div>
          <h3>Business Card Title</h3>
        </a>
      </div>
    </div>
  </section>
  <section class="business-card-form">

    <div class="row">
      <div class="col s12 m6 offset-m3 yellow lighten-4">

        <form action="/includes/upload.image.inc.php" method="POST" enctype="multipart/form-data">
        <div class="file-field input-field">
          <div class="btn waves-effect waves-light yellow darken-1 black-text">
            <span>Image File</span>
            <input type="file" name="file" multiple>
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Upload one or more files">
          </div>
        </div>
        <button class="btn waves-effect waves-light yellow darken-1 black-text" type="submit" name="submit">Upload Image(s)</button>
        </form>
      </div>
    </div>
  </section>
</div>

<?php include "../footer.php" ?>