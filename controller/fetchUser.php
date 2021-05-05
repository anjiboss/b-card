<?php
function fetchUser($conn, $userId){
  $sql = "SELECT * FROM users WHERE id='".$userId."'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    return $row;
 } else {
  echo "0 results";
}
};

?> 