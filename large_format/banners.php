<?php $title = "Banners" ?>
<?php $description = "Hurry Up Print Banners, custom Banners" ?>
<?php require('../head.php') ?>
<?php require('../header.php'); ?>


<div class="container">

  <!-- BREADCRUMBS -->
  <nav class="yellow darken-1 m2a">
    <div class="nav-wrapper ms2">
      <div class="col s12">
        <a href="/index.php" class="breadcrumb grey-text text-lighten-1"><i class="material-icons">home</i></a>
        <a href="/large_format.php" class="breadcrumb grey-text text-lighten-1">Large Format</a>
        <a class="breadcrumb black-text">Banners</a>
      </div>
    </div>
  </nav>
  <p>(Under Construction)</p>
  <?php 
  include_once '../includes/dbh.inc.php';
  
  $sql = "SELECT p.productName, p.imageName, p.imageAlt, ps.selectName, ps.label, so.optionKey, so.optionValue 
  FROM product as p
  INNER JOIN product_selects as ps ON ps.productId=p.id
  INNER JOIN select_options as so ON so.selectId=ps.id";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "SQL STATEMENT FAILED : ( !";
  } else {
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $product = []; 
    while ($row = mysqli_fetch_assoc($result)) {
      $product['productName']=$row['productName'];
      $product['imageName']=$row['imageName'];
      $product['imageAlt']=$row['imageAlt'];
      $product['selects']=[$row['selectName']];
      $product[$row['selectName']] = ['options'];
      $product[$row['selectName']]['options']=[$row['optionKey']=>$row['optionValue']];
    }
  }
  ?>

  
  
  <?php $productName="banners"; ?>
  <?php require_once("../lf_product_template.php"); ?>
</div>

<?php require('../footer.php'); ?>
