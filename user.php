<?php
  include("common/common.inc.php");
  include("./controller/db.php");
  include("./controller/fetchUser.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type='text/javascript' src='https://code.jquery.com/jquery-3.3.1.min.js'></script>
  <link rel="stylesheet" href="css/common.css">
  <title>B-card</title>
  <script src="js/card.js"></script>
</head>
<body>
  <?php
    if (!isset($_GET["id"])){
      header("Location: index.php?error=noUserId");
    }else {
      $user = json_encode(fetchUser($conn, $_GET["id"]));
      echo "<div class='container'></div>";
    }
  ?>
  
  <script>
    let user = '<?php echo $user ?>';
    if (user) {
      user = JSON.parse(user);
      console.log(user)
      userCard(user);
    }
  </script>
</body>
</html>