<?php session_start();
if($count==1){
  $_SESSION['logged']=true;
  $_SESSION['username']=$myusername;
  header("Location: index.php");
  exit();
}
else{
  $_SESSION['logged']=false;
  header("Location: subpages\conntect.html");
  exit();
}
?>
