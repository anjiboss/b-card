<?php

  include("db.php");
  include("../common/common.inc.php");

  $name = $_POST["name"];
  $info = $_POST["info"];

  $splitedFileName = explode(".",$_FILES["avatar"]["name"]);
  $fileExt = $splitedFileName[count($splitedFileName) - 1];
  $targetFile = "images/" . $name . "_avatar.". $fileExt;

  if (move_uploaded_file($_FILES["avatar"]["tmp_name"], "../". $targetFile)) {
      if (isset($_GET["id"])){
        $sql = "UPDATE USER SET name='$name',Info='$info',image_dir='$targetFile' WHERE id='".$_GET["id"]."';";
      }else{
        $sql = "INSERT INTO USER (name, Info, image_dir) VALUES ('$name', '$info', '$targetFile');";
      }
      cLog($sql);
  
      if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
  } else {
    echo "Sorry, there was an error uploading your file.";
  }

?>