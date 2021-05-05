<!-- <?php
  // include("controller/db.php");
  // include("controller/fetchUser.php");
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/common.css">
  <script type='text/javascript' src='https://code.jquery.com/jquery-3.3.1.min.js'></script>
  <title>B-Card Infomation Register</title>
</head>
<body>
  <?php
  // require_once("./include/import.php");
  include("./include/header.php");
   $formId = "";
    $user="";
    if (isset($_GET["id"])) {
      $hasAcc = "true";
      $formId = "id=" . $_GET["id"];
      $user = fetchUser($conn, $_GET["id"]);
    }else{
      $hasAcc = "false";
    }
  ?>
  <form action="controller/saveToDB.php?<?php echo $formId ?>" class="form" enctype="multipart/form-data" method="post">
    <input type="text" name="name"placeholder="Name" id="form-name">
    <input type="text" name="info"placeholder="Infomations" id="form-info">
    <input type="file" name="avatar" id="avatar">
    <input type="submit" value="Upload Profile" name="submit">
  </form>
</body>
<script>
  const hasAcc = <?php echo $hasAcc ?>;
  if (!hasAcc) {
  }else{
    const user = JSON.parse(`<?php echo json_encode($user) ?>`);
    $("#form-name").val(user.name);
    $("#form-info").val(user.Info);
};
</script>
</html>