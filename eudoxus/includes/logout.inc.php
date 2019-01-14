<?php

//if (isset($_POST['sign_up-submit'])){
  session_start();
  session_unset();
  session_destroy();
  header("Location: ../index.php?Logout");
//}
//else{
//  header("Location: ../index.php?CameHereUnwillingly");
//  exit();
//}
