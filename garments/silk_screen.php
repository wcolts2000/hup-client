<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hurry Up Print | Silk Screen Printing</title>
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link
      type="text/css"
      rel="stylesheet"
      href="../css/materialize.min.css"
      media="screen,projection"
    />
    <link type="text/css" rel="stylesheet" href="../css/styles.css" />
    <link rel="icon" href="../img/favicon.png" sizes="32x32">
</head>
<body>
<?php 
require __DIR__ . '../../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
include '../header.php';

echo "<h1>USER: " . getenv("USER") ."</h1>"
?>
<h1>hello</h1>



<!--Import jQuery before materialize.js-->
<script
      type="text/javascript"
      src="https://code.jquery.com/jquery-3.2.1.min.js"
    ></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script src="../js/index.js"></script>
</body>
</html>