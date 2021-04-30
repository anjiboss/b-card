<?php


$servername = "localhost";
$username = "h2s";
$password = "2670875";
$dbname = "bcard";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("connected failed");
}

// cLog("Connected");

?>