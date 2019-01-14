<?php
session_start();
  if(isset($_POST['login-submit'])){

    require 'dbh.inc.php';

    $userNickname = $_POST['nickName'];
    $password = $_POST['pwd'];
    $category = $_POST['userCateg'];


    if (empty($userNickname) || empty($password) || empty($category)) {
      header("Location: ../subpages/connect.php?error=emptyfields");
      exit();
    }
    else{
        $sql ="SELECT * FROM users WHERE userNickname=?; ";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
          header("Location: ../subpages/connect.php?error=sqlerror");
          exit();
        }
        else{
          mysqli_stmt_bind_param($stmt, "s",$userNickname);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          if ($row = mysqli_fetch_assoc($result)) {
          //  $pwdCheck = password_verify($password, $row['pwdUsers']); uncomment when the registration.inc.php works correctly and adds the new user and his code is encripted
            if($password !== $row['pwdUsers']){
              header("Location: ../subpages/connect.php?error=WrongPassword");
              exit();
              }
              elseif($password == $row['pwdUsers']){
                session_start();
                $_SESSION['userNickname'] = $row['userNickname'];
                $_SESSION['userID'] = $row['idUsers'];
                header("Location: ../index.php?Success");
                exit();
              }
              else{
                exit();
              }
          }
          else{
            header("Location: ../subpages/connect.php?error=NoUser");
            exit();
          }
        }
    }

  }
  else{
    header("Location: ../subpages/connect.php?GotHereUnknownly");
    exit();
}
