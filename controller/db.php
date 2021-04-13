<?php

$servername = "localhost";
$username = "root";
$password = "2670875";
$dbname = "bcard";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("connected failed");
}

echo "<script>console.log('Connected')</script>";

?>