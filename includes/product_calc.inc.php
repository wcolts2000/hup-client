<?php
if (isset($_POST['product-cart'])) {
  $orderObj = [];
  foreach ($_POST as $key => $value) {
    $orderObj[htmlspecialchars($key)] = htmlspecialchars($value);
  }
  $str = json_encode($orderObj);
  $userId = $_POST['userId'];
  $userId = intval($userId);
  $currPage = $_POST['currPage'];
  $header = "&str=$str&userId=$userId";
  if (!empty($orderObj)) {
    include_once 'dbh.inc.php';

    $sql = "INSERT INTO shopping_cart (userId, order_object) VALUES (?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../large_format/" . $currPage . ".php?error=sqlerror" . $header);
      exit();
    } else {
      mysqli_stmt_bind_param($stmt, 'is', $userId, $str);
      mysqli_stmt_execute($stmt);

      header('Location: ../large_format/' . $currPage . '.php?cart=success');
      exit();
    }
  }
} else {
  header('Location: ../');
  exit();
}