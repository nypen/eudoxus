<?php
  if(isset($_POST['submit'])){

    require 'dbh.inc.php';

    $userNickname = $_POST['nickName'];
    $password = $_POST['pwd'];
    $category = $_POST['userCateg'];


    if (empty($userNickname) || empty($password) || empty($category)) {
      header("Lacation: ../subpages/connect.php?error=emptyfields");
      exit();
    }
    else{
        $sql ="SELECT * FROM users WHERE userNickname=? ";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
          header("Lacation: ../subpages/connect.php?error=sqlerror");
          exit();
        }
        else{
          mysqli_stmt_bind_param($stmt, "sss",$userNicname, $password, $category);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          if ($row = mysqli_fetch_assoc($result)) {
            $pwdCheck = password_verify($password, $row['pwdUsers']);
            if($pwdCheck == false){
              header("Lacation: ../subpages/connect.php?error=WrongUser");
              exit();
            }
            elseif($pwdCheck == true){
              session_start();

              $_SESSION['userNickname'] = $row['userNickname'];
              $_SESSION['userID'] = $row['idUsers'];
              header("Lacation: ../subpages/connect.php?Success");
              exit();
            }
            else{
              exit();
            }
          }
          else{
            header("Lacation: ../subpages/connect.php?error=NoUser");
            exit();
          }
        }
    }

  }
  else{
    header("Location: ../subpages/connect.php");
    exit();
  }
