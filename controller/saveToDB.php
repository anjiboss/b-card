<?php 
  include("db.php");
?>

<?php
  $name = $_POST["name"];
  $email = $_POST["email"];

  $sql = "INSERT INTO user ( username, email) VALUES ('".$name."', '".$email."')";

  if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>