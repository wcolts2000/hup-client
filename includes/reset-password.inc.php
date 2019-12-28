<?php

if (isset($_POST['reset-password-submit'])) {
  
  $selector = $_POST['selector'];
  $validator = $_POST['validator'];
  $password = $_POST['password'];
  $passwordRepeat = $_POST['password-conf'];

  if (empty($password) || empty($passwordRepeat)) {
    header("Location: ../create_new_password.php?newpwd=empty&selector=".$selector."&validator=".$validator);
    exit();
  } else if ($password != $passwordRepeat ) {
    header("Location: ../create_new_password.php?newpwd=pwdnotsame&selector=".$selector."&validator=".$validator);
    exit();
  }
  
  $currentDate = date("U");
  
  require('dbh.inc.php');
  
  $sql = "SELECT * FROM pwdReset WHERE pwdResetSelector=? AND pwdResetExpires >= $currentDate;";
  $stmt = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt, $sql)) {
    echo "There was an error!";
    exit();
  } else {
    mysqli_stmt_bind_param($stmt, "s", $selector);
    mysqli_stmt_execute($stmt);
    
    $result = mysqli_stmt_get_result($stmt);
    if(!$row = mysqli_fetch_assoc($result)) {
      echo "You need to re-submit your reset request yo.";
      exit();
    } else {
      $tokenBin = hex2bin(($validator));
      $tokenCheck = password_verify($tokenBin, $row['pwdResetToken']);

      if ($tokenCheck === false) {
        echo "You need to re-submit your request, oops.";
        exit();
      } elseif ($tokenCheck === true) {

        $tokenEmail = $row['pwdResetEmail'];

        $sql = "SELECT * FROM users WHERE email=?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
          echo "There was an error!";
          exit();
        } else {
          mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          if(!$row = mysqli_fetch_assoc($result)) {
            echo "There was an error!";
            exit();
          } else {

            $sql = "UPDATE users SET password=? WHERE email=?";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)) {
              echo "There was an error!";
              exit();
            } else {
              $newPwdHash = password_hash($password, PASSWORD_DEFAULT);
              mysqli_stmt_bind_param($stmt, "ss", $newPwdHash, $tokenEmail);
              mysqli_stmt_execute($stmt);

              $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?";
              $stmt = mysqli_stmt_init($conn);
              if (!mysqli_stmt_prepare($stmt, $sql)) {
                echo "There was an error!";
                exit();
              } else {
                mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                mysqli_stmt_execute($stmt);
                header("Location: ../login.php?newpwd=passwordupdated");
              }
            }

          }
        }


      }
    }
  }

  mysqli_stmt_close($stmt);
  mysqli_close($conn);

} else {
  header("Location: ../index.php?error=sqlerror");
}