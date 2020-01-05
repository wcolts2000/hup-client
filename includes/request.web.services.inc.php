<?php

if(isset($_POST['register-submit'])) {

  require 'dbh.inc.php';

  $b_obj = $_POST['business_objective']; 
  $p_client = $_POST['prospective_clients']; 
  $goal = $_POST['goal']; 
  $uniq = $_POST['uniq']; 
  $n_client = $_POST['new_clients'];
  $sales = $_POST['sales'];
  $brand = $_POST['brand'];
  $deadline = $_POST['datepicker'];
  $questions = $_POST['questions'];
  $id = $_POST['id'];
  $header_str = "&b_obj=".$b_obj."&p_client=".$p_client."&goal=".$goal."&uniq=".$uniq."&n_client=".$n_client."&sales=".$sales."&brand=".$brand."&deadline=".$deadline."&questions=".$questions;
  if(($id == null)) {
    header("Location: ../websites/request_form.php?error=notloggedin".$header_str);
    exit();
  } else {
    if (
      empty($b_obj) ||
      empty($p_client) ||
      empty($goal) ||
      empty($uniq) ||
      empty($brand)
    ) {
      header("Location: ../websites/request_form.php?error=emptyfields".$header_str);
      exit();
    } else {

      $sql = "INSERT INTO webservices (userId, business_obj, prospective_clients, website_goal, uniqueness, new_clients, sales, brand, deadline, questions) VALUES ($id, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
      $stmt = mysqli_stmt_init($conn);

      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../websites/request_form.php?error=sqlerror".$header_str);
        exit();
      } else {
        mysqli_stmt_bind_param($stmt, "sssssssss", $b_obj, $p_client, $goal, $uniq, $n_client, $sales, $brand, $deadline, $questions);
        mysqli_stmt_execute($stmt);
        header("Location: ../index.php?websiterequest=submitted");
        exit();
      }
    }
  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
} else {
  header("Location: ../websites/request_form.php");
  exit();
}

