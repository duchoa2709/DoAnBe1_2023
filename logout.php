<?php session_start();
if(isset($_SESSION['user']) ){
  unset($_SESSION['user']);
  header("location:index.php");
}
else{
  echo "moi ban quy ve trang My Account";
  ?>
  <a href="logins.php">My Account</a>
  <?php
}


?>