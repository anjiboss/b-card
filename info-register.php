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
  
  ?>
  <form action="controller/saveToDB.php" class="form" enctype="multipart/form-data" method="post">
    <input type="text" name="name" placeholder="Name"autocomplete="off" id="form-name"><br>
    <input type="password"placeholder="Password" name="pwd" id="form-pwd"><br>
    <input type="password"placeholder="Re-Password" name="rePwd" id="form-pwd"><br>
    <input type="text" name="info" placeholder="Infomations" id="form-info">
    <input type="file" name="avatar" id="avatar">
    <input type="submit" value="Upload Profile" name="submit">
  </form>
</body>
<script>

</script>
</html>