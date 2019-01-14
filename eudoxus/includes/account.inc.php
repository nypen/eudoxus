<?php
session_start();

include 'user.inc.php';
$user = new User();

if(isset($_POST['forgotSubmit'])){
    //check whether email is empty
    if(!empty($_POST['email'])){
      $usermail = $_POST['email'];

        $sql ="SELECT * FROM users WHERE emailUsers=?; ";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
          header("Location: ../subpages/recover.php?error=sqlerror");
          exit();
        }else{
          mysqli_stmt_bind_param($stmt, "s",$usermail);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          if ($row = mysqli_fetch_assoc($result)){
              //monadiko string
              $uniqidStr = md5(uniqid(mt_rand()));;

              //anavathimish tou pediou forgot_pass_identity
              $conditions = array(
                  'emailUsers' => $_POST['email']
              );
              $data = array(
                  'forgot_pass_identity' => $uniqidStr
              );
              $update = $user->update($data, $conditions);

              if($update){
                  $resetPassLink = 'localhost/eudoxus/subpages/resetpassword.php?fp_code='.$uniqidStr;

                  // plhrofories xrhsth
                  $con['where'] = array('emailUsers'=>$_POST['email']);
                  $con['return_type'] = 'single';
                  $userDetails = $user->getRows($conn);

                  //apostolh email
                  $to = $userDetails['emailUsers'];
                  $subject = "Password Update Request";
                  $mailContent = 'Αγαπητέ '.$userDetails['userFirstName'].',
                  <br/>Έχετε υποβάλει αίτημα ανάκτησης κωδικού πρόσβασης. Αν πρόκειται για λάθος, απλά αγνοήστε το μήνυμα αυτό.
                  <br/>Για να αλλάξετε το κωδικό σας, επισκεφθείτε το σύνδεσμο: <a href="'.$resetPassLink.'">'.$resetPassLink.'</a>
                  <br/><br/>Με εκτίμηση,
                  <br/>Εύδοξος';
                  //epikefalida gia apostolh HTML email
                  $headers = "MIME-Version: 1.0" . "\r\n";
                  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                  //additional headers
                  $headers .= 'From: eudoxus@example.com>' . "\r\n";
                  //apostolh
                  mail($to,$subject,$mailContent,$headers);

                  $sessData['status']['type'] = 'success';
                  $sessData['status']['msg'] = 'Please check your e-mail, we have sent a password reset link to your registered email.';
              }else{
                  $sessData['status']['type'] = 'error';
                  $sessData['status']['msg'] = 'Some problem occurred, please try again.';
              }
          }else{
              $sessData['status']['type'] = 'error';
              $sessData['status']['msg'] = 'Given email is not associated with any account.';
          }
        }
    }else{
        $sessData['status']['type'] = 'error';
        $sessData['status']['msg'] = 'Enter email to create a new password for your account.';
    }
    //status
    $_SESSION['sessData'] = $sessData;
    //anakateuthinsh
    header("Location:forgotPassword.php");
}elseif(isset($_POST['resetSubmit'])){
    $fp_code = '';
    if(!empty($_POST['password']) && !empty($_POST['confirm_password']) && !empty($_POST['fp_code'])){
        $fp_code = $_POST['fp_code'];
        //σύγκριση κωδικών
        if($_POST['password'] !== $_POST['confirm_password']){
            $sessData['status']['type'] = 'error';
            $sessData['status']['msg'] = 'Confirm password must match with the password.';
        }else{
            //elegxos an uparxei identity forgot pass
            $prevCon['where'] = array('forgot_pass_identity' => $fp_code);
            $prevCon['return_type'] = 'single';
            $prevUser = $user->getRows($prevCon);
            if(!empty($prevUser)){
                //enhmerwsh tou neou kwdikou
                $conditions = array(
                    'forgot_pass_identity' => $fp_code
                );
                $data = array(
                    'pwdUsers' => md5($_POST['password'])
                );
                $update = $user->update($data, $conditions);
                if($update){
                    $sessData['status']['type'] = 'success';
                    $sessData['status']['msg'] = 'Your account password has been reset successfully. Please login with your new password.';
                }else{
                    $sessData['status']['type'] = 'error';
                    $sessData['status']['msg'] = 'Some problem occurred, please try again.';
                }
            }else{
                $sessData['status']['type'] = 'error';
                $sessData['status']['msg'] = 'You does not authorized to reset new password of this account.';
            }
        }
    }else{
        $sessData['status']['type'] = 'error';
        $sessData['status']['msg'] = 'All fields are mandatory, please fill all the fields.';
    }
    //ananewsh status
    $_SESSION['sessData'] = $sessData;
    $redirectURL = ($sessData['status']['type'] == 'success')?'index.php':'subpages/connect.php?fp_code='.$fp_code;
    //ranakateuthinsh pasword page
    header("Location:".$redirectURL);
}
