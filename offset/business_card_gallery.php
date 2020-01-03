<?php $title = 'Business Card Gallery' ?>
<?php $description = 'Hurry Up Print Business Card Designs' ?>
<?php require('../head.php') ?>

<?php require('../header.php'); ?>
<div class="container m2a">
  <h1>Business Card Designs</h1>
  <section class="business-card-gallery">
    <div class="row">
      <div class="bcard-gallery">
        <?php
        include_once '../includes/dbh.inc.php';

        $sql = "SELECT * FROM bcardgallery ORDER BY imgOrder DESC";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          echo "SQL STATEMENT FAILED : (!";
        } else {
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);

          while ($row = mysqli_fetch_assoc($result)) {
            echo '<a href="#!">
                    <img class="materialboxed" data-caption="'.$row['imgDesc'].'" width="250" src="../img/bcardgallery/'.$row['imgFullName'].'">
                    <h5>'.$row['title'].'</h5>
                    <p>'.$row['imgDesc'].'</p>
                  </a>';    
          }
        }

        
        ?>
      </div>
    </div>
  </section>
  <?php 
  if (isset($_SESSION['admin'])) {
    echo '<section class="business-card-form">
            <div class="row">
              <div class="col s12 m10 offset-m1 yellow lighten-4 p2">
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
          </section>';
  }
?>
</div>

<?php include "../footer.php" ?>