<?php
if (isset($_POST['submit'])) {
  $newFileName = $_POST['filename'];
  if (empty($_POST['filename'])) {
    $newFileName = 'bcard_gallery-';
  } else {
    $newFileName = strtolower(str_replace(" ", "-", $newFileName));
  }
  $imageTitle = $_POST['filetitle'];
  $imageDesc = $_POST['filedesc'];

  $file = $_FILES['file'];
  $fileName = $file["name"];
  $fileType = $file["type"];
  $fileTempName = $file["tmp_name"];
  $fileError = $file["error"];
  $fileSize = $file["size"];

  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = array('jpg', 'jpeg', 'png');

  if (in_array($fileActualExt, $allowed)) {
    if ($fileError === 0) {
      if ($fileSize  < 2000000) {
        $imgFullName = $newFileName.".".uniqid('', true).".".$fileActualExt;
        $fileDestination = "../img/bcardgallery/".$imgFullName;
        include_once "dbh.inc.php";

        if (empty($imageTitle) || empty($imageDesc)) {
          header("Location: ../offset/business_card_gallery.php?upload=empty");
          exit();
        } else {
          $sql = "SELECT * FROM bcardgallery;";
          $stmt = mysqli_stmt_init($conn);
          if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "SQL STATEMENT FAILED 1!";
          } else {
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $rowCount = mysqli_num_rows($result);
            $setImageOrder = $rowCount + 1;

            $sql = "INSERT INTO bcardgallery (title, imgDesc, imgFullName, imgOrder) VALUES (?,?,?,?);";
            if (!mysqli_stmt_prepare($stmt, $sql)) {
              echo "SQL STATEMENT FAILED 2!";
            } else {
              mysqli_stmt_bind_param($stmt, "ssss", $imageTitle, $imageDesc, $imgFullName, $setImageOrder);
              mysqli_stmt_execute($stmt);

              move_uploaded_file($fileTempName, $fileDestination);
              header('Location: ../offset/business_card_gallery.php?upload=success');
            }
          }
        }
      } else {
        echo "File size is too big!";
      }
    } else {
      echo "There was an error uploading the image!";
    }
  } else {
    echo "You can only upload files of types 'jpg', 'jpeg', 'png'.";
  }
}