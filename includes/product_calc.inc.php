<?php
if (isset($_POST['product-cart'])) {
  // header('Location: ../large_format/banners.php?cart=success');
  $orderObj = [];
  foreach ($_POST as $key => $value) {
    $orderObj[htmlspecialchars($key)] = htmlspecialchars($value);
    // echo "Field " . htmlspecialchars($key) . " is " . htmlspecialchars($value) . "<br>";
  }
  print_r($orderObj);
  $str = json_encode($orderObj);
  print_r($str);
  exit();
} else {
  header('Location: ../index.php');
  exit();
}