<?php
  include_once 'dbh.inc.php';

  $Max_books = $_GET['MaxBooks'];
  $Max_sem = $_GET['MaxSem'];
  $Max_winter = $_GET['MaxWin'];
  $Max_spring = $_GET['MaxSpr'];
  $Win_start_d = $_GET['WinStart'];
  $Win_stop_d = $_GET['WinStop'];
  $Spr_start_d = $_GET['SprStart'];
  $Spr_stop_d = $_GET['SprStop'];


  $sql = "UPDATE Parametroi_dianomis
          SET max_books='$Max_books', max_semesters='$Max_sem', max_winter='$Max_winter', max_spring='$Max_spring', winter_start_date='$Win_start_d', winter_stop_date='$Win_stop_d', spring_start_date='$Spr_start_d', spring_stop_date='$Spr_stop_d'";


  mysqli_query($conn, $sql);

  header("Location: ../subpages/secret_parameters.php?add_parameters=success");
