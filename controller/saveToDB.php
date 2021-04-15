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
        $update = true;
      }else{
        $sql = "INSERT INTO USER (name, Info, image_dir) VALUES ('$name', '$info', '$targetFile');";
        $update = false;
      }
      cLog($sql);
  
      if (mysqli_query($conn, $sql)) {
        if ($update){
          $lastId = $_GET["id"];
        }else {
          $lastId = mysqli_insert_id($conn);
        }
        header("Location: http://localhost/b-card/user.php?id=" . $lastId);
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    } else {
    header("Location: http://localhost/b-card/index.php?error=uploadError");
  }

?>