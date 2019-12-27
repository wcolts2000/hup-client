<?php
require __DIR__ . '../../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$servername = getenv('DBSERVERNAME');
$dBUsername = getenv("DBUSERNAME");
$dBPassword = getenv("DBPASSWORD");
$dBName = getenv("DBNAME");

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}