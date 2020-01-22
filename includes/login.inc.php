<?php

if (isset($_POST['login-submit']) || isset($_POST['login-submit-lf'])) {
  require 'dbh.inc.php';



  $email = $_POST['email'];
  $password = $_POST['pwd'];
  $webservice = $_POST['webservice'];
  $currPage = $_POST['currPage'];


  if (empty($email) || empty($password)) {
    header("Location: ../login.php?error=emptyfields");
    exit();
  } else {
    $sql = "SELECT * FROM users WHERE email=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../login.php?error=sqlerror");
      exit();
    } else {
      mysqli_stmt_bind_param($stmt, 's', $email);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
        $pwdCheck = password_verify($password, $row['password']);
        if ($pwdCheck == false) {
          header("Location: ../login.php?error=incorrectcredentials");
          exit();
        } else if ($pwdCheck == true) {
          session_start();
          if ($row["admin"] === 1) {
            $_SESSION['admin'] = $row['admin'];
          }
          $_SESSION['email'] = $row["email"];
          $_SESSION['id'] = $row["id"];
          if ($webservice == "true") {
            header("Location: ../websites/request_form.php");
            exit();
          }
          if (!empty($currPage)) {
            header("Location: ../large_format/" . $currPage . ".php");
            exit();
          }
          header("Location: ../index.php?login=success");
          exit();
        } else {
          header("Location: ../login.php?error=incorrectcredentials");
          exit();
        }
      } else {
        header("Location: ../login.php?error=incorrectcredentials");
        exit();
      }
    }
  }
} else {
  header("Location: ../login.php");
  exit();
}