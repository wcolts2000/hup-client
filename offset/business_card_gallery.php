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
</div>

<?php include "../footer.php" ?>