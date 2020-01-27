<?php
if (isset($_POST['submit'])) {
  $name = $_POST['catName'];

  include_once "dbh.inc.php";

  if (empty($name)) {
    header("Location: ../admin.php?upload=empty");
    exit();
  } else {
    $sql = "SELECT * FROM product_categories;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      echo "SQL STATEMENT FAILED 1!";
    } else {
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      $rowCount = mysqli_num_rows($result);

      $sql = "INSERT INTO product_categories (name) VALUES (?);";
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "SQL STATEMENT FAILED 2!";
      } else {
        mysqli_stmt_bind_param($stmt, "s", $name);
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