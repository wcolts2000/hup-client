<?php
if (isset($_POST['register-submit'])) {

  require 'dbh.inc.php';

  $firstname = $_POST['first_name'];
  $lastname = $_POST['last_name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address1 = $_POST['address_1'];
  $address2 = $_POST['address_2'];
  $city = $_POST['city'];
  $zipcode = $_POST['zip'];
  $country = $_POST['country'];
  $state = $_POST['state'];
  $password = $_POST['password'];
  $passwordConf = $_POST['password-conf'];
  $newsletter = $_POST['newsletter'];
  $privacy = $_POST['privacy'];
  $webservice = $_POST['webservice'];
  $header_str = "&webservice=".$webservice . "&f_name=" . $firstname . "&l_name=" . $lastname . "&mail=" . $email . "&phone=" . $phone . "&add1=" . $address1 . "&add2=" . $address2 . "&city=" . $city . "&zip=" . $zipcode . "&country=" . $country . "&st=" . $state . "&nltr=" . $newsletter . "&privacy=" . $privacy;

  if (!empty($address1)) {
    if (strpos($address1, "#") > 0) {
      header("Location: ../register.php?" . $address1);
      $address1 = str_replace("#", urlencode("#"), $address1);
    }
  }

  if (!empty($address2)) {
    if (strpos($address2, "#") !== false) {
      $address2 = str_replace("#", urlencode("#"), $address2);
    }
  }

  if (
    empty($firstname) ||
    empty($lastname) ||
    empty($email) ||
    empty($phone) ||
    empty($address1) ||
    empty($city) ||
    empty($zipcode) ||
    empty($country) ||
    empty($state) ||
    empty($password) ||
    empty($passwordConf) ||
    empty($newsletter) ||
    empty($privacy)
  ) {
    header("Location: ../register.php?error=emptyfields". $header_str);
    exit();
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../register.php?error=invalidemail". $header_str);
    exit();
  } else if (!preg_match("/^[a-zA-Z]*$/", $firstname)) {
    header("Location: ../register.php?error=invalidf_name". $header_str);
    exit();
  } else if (!preg_match("/^[a-zA-Z]*$/", $lastname)) {
    header("Location: ../register.php?error=invalidl_name". $header_str);
    exit();
  } else if ($password !== $passwordConf) {
    header("Location: ../register.php?error=passwordcheck". $header_str);
    exit();
  } else {

    $sql = "SELECT email FROM users WHERE email=?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../register.php?error=sqlerror".$header_str);
      exit();
    } else {
      mysqli_stmt_bind_param($stmt, "s", $email);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);
      if ($resultCheck > 0) {
        header("Location: ../register.php?error=emailtaken". $header_str);
        exit();
      } else {
        $sql = "INSERT INTO users (firstName, lastName, email, phone, address1, address2, city, zipcode, country, state, password, newsletter, privacy) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 1)";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("Location: ../register.php?error=sqlerror".$header_str);
          exit();
        } else {
          $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

          mysqli_stmt_bind_param($stmt, "sssssssisssi", $firstname, $lastname, $email, $phone, $address1, $address2, $city, $zipcode, $country, $state, $hashedPwd, $newsletter);
          mysqli_stmt_execute($stmt);
          if($_POST['webservice'] == "true") {
            header("Location: ../login.php?registration=success&email=".$email."&webservice=true");
            exit();
          }
          header("Location: ../login.php?registration=success&email=".$email."HMM..".$_GET('webservice') );
          exit();
        }
      }
    }
  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
} else {
  header("Location: ../register.php");
  exit();
}