<?php
session_start();
//if(isset($_POST['secret-enter'])) { //Den douleuei akoma h sunthiki
  if($_SESSION['userID']){
    header("Location: ../subpages/secret.php?Success");
    exit();
  }
  else{
    header("Location: ../subpages/connect.php?ConnectFirst");
    exit();
  }
//}
//else if(isset($_POST['submit-student'])) {
//  if($_SESSION['userID']) {
//    header("Location: ..subpages/connect.php?ConnectFirst");
//    exit();
//  }
//  else{
//    header("Location: ../submit_books.inc.php");
//    exit();
//  }
//}
