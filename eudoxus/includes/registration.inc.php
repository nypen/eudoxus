<?php

if (isset($_POST['sign_up-submit'])) {
  require 'dbh.inc.php';

  $username = $_POST['nickName'];
  $pwd = $_POST['pwd'];
  $repwd = $_POST['repeat-pwd'];
  $userFirst = $_POST['FirstName'];
  $userLast = $_POST['LastName'];
  $usermail = $_POST['userEmail'];
  $category = $_POST['selectCat'];

  if ($category == 'student') {
    $inst = $_POST['selInstitute'];
    $am = $_POST['AMnum'];
    $dep = $_POST['userDep'];
    $studyear = $_POST['year'];
  }else{
    $inst = NULL;
    $am = NULL;
    $dep = NULL;
    $studyear = NULL;
  }
  if (empty($username)  || empty($pwd) || empty($repwd) || empty($userFirst) || empty($userLast) || empty($category) ) {
    header("Location: ../subpages/signup.php?error=emptyfields&nickName=".$username."&userEmail=".$usermail);
    exit();
  }
  elseif(!filter_var($usermail,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username)){
    header("Location: ../subpages/signup.php?error=invalidmail_nickName");
    exit();
  }
  elseif (!filter_var($usermail,FILTER_VALIDATE_EMAIL)) {
    header("Location: ../subpages/signup.php?error=invalidmail&nickName=".$username);
    exit();
  }
  elseif (!preg_match("/^[a-z,A-Z,0-9]*$/",$username)) {
    header("Location: ../subpages/signup.php?error=invalidNickName&userEmail=".$usermail);
    exit();
  }
  elseif ($pwd !== $repwd) {
    header("Location: ../subpages/signup.php?error=passwordCheck&nickName=".$username."&userEmail=".$usermail);
    exit();
  }
  else {

    $sql = "SELECT idUsers FROM users WHERE idUsers=?";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
      header("Location: ../subpages/signup.php?error=sqlerror");
      exit();
    }else {
      mysqli_stmt_bind_param($stmt,"s",$username);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck= mysqli_stmt_num_rows($stmt);
      if($resultCheck > 0){
        header("Location: ../subpages/signup.php?error=usertaken&userEmail=".$usermail);
        exit();
      }
      else{
          if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../subpages/sign_up.php?error=sqlerror");
            exit();
          }else{
            $sql = "INSERT INTO users (userNickname, userFirstName, userLastName, emailUsers, pwdUsers, usersCategory,StudentsAM,StudentsInst,StudentsDepart,StudentsYear) VALUES (?,?,?,?,?,?,?,?,?,?)"; /* placeholders for safety reasons*/
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)){
              header("Location: ../subpages/sign_up.php?error=sqlerror");
              exit();
            }
            else{
              $hashedPwd= password_hash($pwd, PASSWORD_DEFAULT);
              mysqli_stmt_bind_param($stmt,"ssssssdssd", $username, $userFirst, $userLast, $usermail, $hashedPwd, $category,$am, $inst, $dep, $studyear);
              mysqli_stmt_execute($stmt);
              mysqli_stmt_store_result($stmt);
            }
          }
      }
    }
  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
  header("Location: ../index.php?SuccessfulRegistration");
  exit();
}
else {
  header("Location: ../subpages/sign_up.php?UnknownError");
  exit();
}
