<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/common.css">
  <script type='text/javascript' src='https://code.jquery.com/jquery-3.3.1.min.js'></script>
  <title>B-card</title>
</head>
<body>
  <h1>B-card</h1>
  <?php
    if (isset($_GET["error"])) {
      switch ($_GET["error"]) {
        case 'noUserId':
          echo "<p>You did not provided user id</p>";
          break;
        
        default:
          # code...
          break;
      }
    }
  ?>
  <nav>
    <ul>
      <li>
        <h4><a href="info-register.php">REGISTER</a></h4>
      </li>
      <li>
        <h4>Already Has Account?</h4>
        <input type="text" class="input" id="id-input">
        <button onclick="profileNav()"class="btn">Go To Profile</button>
      </li>
    </ul>
  </nav>
</body>
<script >
  const profileNav = () => {
    id= $("#id-input").val();
    window.location.href = "/user.php?id=" + id;
  }
</script>
</html>