<?php

if(isset($_POST['newsletter-request'])) {
  require 'dbh.inc.php';

  $email = $_POST['email'];

  if(empty($email)) {
    header("Location: ../index.php?error=newsletterempty");
    exit();
  } else {

    $sql = "SELECT * FROM newsletter WHERE email=?;";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../index.php?error=sqlerror");
      exit();
    } else {
      mysqli_stmt_bind_param($stmt, 's', $email);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result(($stmt));
      $resultCheck = mysqli_stmt_num_rows($stmt);
      if($resultCheck > 0) {
        header("Location: ../index.php?emailindb=true");
        exit();
      } else {
        $sql = "INSERT INTO newsletter (email) VALUES (?);";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)) {
          header("Location: ../index.php?error=sqlerror");
          exit();
        } else {
          mysqli_stmt_bind_param($stmt, "s", $email);
          mysqli_stmt_execute($stmt);
          header("Location: ../index.php?newsletter=subscribed&email=" . $email );
          exit();
        }
      }
    }
  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
} else {
  header("Location: ../index.php");
  exit();
}