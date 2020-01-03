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
          <h5>Business Card Title</h5>
          <p>This is the description</p>
        </a>
        <a href="#!">
          <div></div>
          <h5>Business Card Title</h5>
          <p>This is the description</p>
        </a>
        <a href="#!">
          <div></div>
          <h5>Business Card Title</h5>
          <p>This is the description</p>
        </a>
        <a href="#!">
          <div></div>
          <h5>Business Card Title</h5>
          <p>This is the description</p>
        </a>
        <a href="#!">
          <div></div>
          <h5>Business Card Title</h5>
          <p>This is the description</p>
        </a>
      </div>
    </div>
  </section>
  <?php 
  if (isset($_SESSION['id'])) {
    echo '<section class="business-card-form">
            <div class="row">
              <div class="col s12 m6 offset-m3 yellow lighten-4 p1">
                <form action="/includes/upload.bcard.inc.php" method="POST" class="" enctype="multipart/form-data">
                <div class="input-field">
                  <input type="text" id="filename" name="filename">
                  <label for="filename">File name</label>
                </div>
                <div class="input-field">
                  <input type="text" id="filetitle" name="filetitle">
                  <label for="filetitle">File Title</label>
                </div>
                <div class="input-field">
                  <input type="text" id="filedesc" name="filedesc">
                  <label for="filedesc">File Description</label>
                </div>
                <div class="file-field input-field">
                  <div class="btn waves-effect waves-light yellow darken-1 black-text">
                    <span>Select File</span>
                    <input type="file" name="file">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Upload one or more files">
                  </div>
                </div>
                <button class="btn waves-effect waves-light yellow darken-1 black-text" type="submit" name="submit">Upload Image</button>
                </form>
              </div>
            </div>
          </section>
        </div>';
  }
?>

<?php include "../footer.php" ?>