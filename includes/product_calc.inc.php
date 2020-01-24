<?php
if (isset($_POST['product-cart'])) {
  $orderObj = [];
  foreach ($_POST as $key => $value) {
    $orderObj[htmlspecialchars($key)] = htmlspecialchars($value);
  }
  $str = json_encode($orderObj);
  if (!empty($orderObj)) {
    header('Location: ../large_format/banners.php?cart=success');
    exit();
  }
} else {
  header('Location: ../index.php');
  exit();
}