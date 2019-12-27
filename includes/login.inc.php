<?php

if (isset($_POST['login-submit'])) {
  require 'dbh.inc.php';

  $email = $_POST['email'];
  $password = $_POST['pwd'];

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
          $_SESSION['id'] = $row["id"];
          $_SESSION['email'] = $row["email"];
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