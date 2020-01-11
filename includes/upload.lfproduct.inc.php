<?php
$productName = $imageName = $imageAlt = $productDescription = $productPrice = "";

if (isset($_POST['product-submit'])) {
  $categoryId = $_POST['categoryId'];
  $categoryId = intval($categoryId);
  $productName = $_POST['productName'];
  $imageName = $_POST['imageName'];
  $imageAlt = $_POST['imageAlt'];
  $productDescription = $_POST['productDescription'];
  $productPrice = $_POST['productPrice'];
  $productPrice = floatval($productPrice);

  $header = "&categoryId=".$categoryId."&productName=".$productName."&imageName=".$imageName."&imageAlt=".$imageAlt."&productDescription=".$productDescription."&productPrice=".$productPrice;

  include_once "dbh.inc.php";

  if (empty($productName) || empty($imageName) || empty($imageAlt) || empty($productDescription) ||  empty($productPrice)) {
    header("Location: ../admin.php?upload=empty".$header);
    exit();
  } else {
    $sql = "SELECT * FROM product;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../admin.php?error=sql1".$header);
      exit();
    } else {
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      $rowCount = mysqli_num_rows($result);
      
      $sql = "INSERT INTO product (categoryId, productName, imageName, imageAlt, productDescription, productPrice) VALUES (?,?,?,?,?,?);";
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../admin.php?error=sql2".$header);
        exit();
      } else {
        mysqli_stmt_bind_param($stmt, "issssd", $categoryId, $productName, $imageName, $imageAlt, $productDescription, $productPrice);
        mysqli_stmt_execute($stmt);

        header('Location: ../admin.php?upload=success');
        exit();
      }
    }
  }

  // header("Location: ../admin.php?Hello");
  // exit();
} elseif (isset($_POST['select-submit'])) {
  $productSelectName = $_POST['productSelectName'];

  include_once "dbh.inc.php";


  header("Location: ../admin.php?there");
  exit();
}
else  {
  header("Location: ../index.php");
  exit();
}