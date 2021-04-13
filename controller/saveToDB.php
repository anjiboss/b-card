<?php 
  include("db.php");
?>

<?php
  $name = $_GET["name"];
  $info = $_GET["info"] || "none";

  $sql = "INSERT INTO USER (name, Info) VALUES ('".$name."','".$info."');";

  if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>