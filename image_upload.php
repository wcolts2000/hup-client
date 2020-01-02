<?php $title = 'Upload Images' ?>
<?php $description = 'Hurry Up Print Image File Uploads' ?>
<?php require('head.php') ?>

<?php require('header.php'); ?>

<div class="container m2a">
  <div class="row">
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

<?php include "footer.php" ?>