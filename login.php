<?php
if (isset($_GET['continue'])) {
  $h_code = $_GET['user'];
  $result = mysqli_query($conn, "SELECT * FROM husers WHERE h_code='"$h_code"'");
  if ($result -> num_rows > 0) {
    while ($row = mysqli_fetch_assoc ($result) {
      
      echo '<form name="continue" action="" method="POST">
          <input type="password" name="h_password">
          <input type="submit" name="login">
          </form>';
      
      if (isset ($_POST['login'])) {
        if ($_POST['h_password'] == $row['h_password']) {
          $_SESSION[''] = $row[''];
          
          header ("Location: portal/user/$code/view");
        } else {
          echo "Wrong Pass";
        }
      }
      
    }
  
  } else {
    echo "Something went wrong and we could not log you in.";
  }
} else {
  
  echo '<form name="continue" action="" method="GET">
        <input type="text" name="user" placeholder="Username/Email">
        <input type="submit" name="continue" value="true">
        </form>';
}
?>
