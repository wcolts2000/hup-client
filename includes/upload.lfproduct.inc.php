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

  $header = "&categoryId=" . $categoryId . "&productName=" . $productName . "&imageName=" . $imageName . "&imageAlt=" . $imageAlt . "&productDescription=" . $productDescription . "&productPrice=" . $productPrice;

  include_once "dbh.inc.php";

  if (empty($productName) || empty($imageName) || empty($imageAlt) || empty($productDescription) ||  empty($productPrice)) {
    header("Location: ../admin.php?upload=empty" . $header);
    exit();
  } else {
    $sql = "SELECT * FROM product;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../admin.php?error=sql1" . $header);
      exit();
    } else {
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      $rowCount = mysqli_num_rows($result);

      $sql = "INSERT INTO product (categoryId, productName, imageName, imageAlt, productDescription, productPrice) VALUES (?,?,?,?,?,?);";
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../admin.php?error=sql2" . $header);
        exit();
      } else {
        mysqli_stmt_bind_param($stmt, "issssd", $categoryId, $productName, $imageName, $imageAlt, $productDescription, $productPrice);
        mysqli_stmt_execute($stmt);

        header('Location: ../admin.php?upload=success');
        exit();
      }
    }
  }
} elseif (isset($_POST['select-submit'])) {
  $productId = $_POST['productIdSelect'];
  $productId = intval($productId);
  $selectName = $_POST['productSelectName'];
  $label = $_POST['prod1Label'];
  $header = "&productId=$productId&selectName=$selectName&label=$label";

  include_once "dbh.inc.php";

  if (empty($productId) || empty($selectName) || empty($label)) {
    header("Location: ../admin.php?upload=empty" . $header);
    exit();
  } else {
    $sql = "SELECT * FROM product_selects;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../admin.php?error=sqlerr1" . $header);
      exit();
    } else {
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      $rowCount = mysqli_num_rows($result);

      $sql = "INSERT INTO product_selects (productId, selectName, label) VALUES (?,?,?);";
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../admin.php?error=sqlerr2" . $header);
        exit();
      } else {
        mysqli_stmt_bind_param($stmt, "iss", $productId, $selectName, $label);
        mysqli_stmt_execute($stmt);

        header('Location: ../admin.php?upload=success');
        exit();
      }
    }
  }
} elseif (isset($_POST['options-submit'])) {
  $selectId = $_POST['selectIdSelect'];
  $selectId = intval($selectId);
  $optionKey = $_POST['prod1key1'];
  $optionValue = $_POST['prod1val1'];
  $header = "&selectId=$selectId&optionKey=$optionKey&optionValue=$optionValue";

  include_once "dbh.inc.php";

  if (empty($selectId) || empty($optionKey) || empty($optionValue)) {
    header("Location: ../admin.php?upload=empty" . $header);
    exit();
  } else {
    $sql = "SELECT * FROM select_options;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../admin.php?error=sqlerr1" . $header);
      exit();
    } else {
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      $rowCount = mysqli_num_rows($result);

      $sql = "INSERT INTO select_options (selectId, optionKey, optionValue) VALUES (?,?,?);";
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../admin.php?error=sqlerr2" . $header);
        exit();
      } else {
        mysqli_stmt_bind_param($stmt, "iss", $selectId, $optionKey, $optionValue);
        mysqli_stmt_execute($stmt);

        header('Location: ../admin.php?upload=success');
        exit();
      }
    }
  }
} else {
  header("Location: ../");
  exit();
}