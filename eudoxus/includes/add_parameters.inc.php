<?php
  include_once 'dbh.inc.php';

  $Max_books = $_POST['MaxBooks'];
  $Max_sem = $_POST['MaxSem'];
  $Max_winter = $_POST['MaxWin'];
  $Max_spring = $_POST['MaxSpr'];
  $Win_start_d = $_POST['WinStart'];
  $Win_stop_d = $_POST['WinStop'];
  $Spr_start_d = $_POST['SprStart'];
  $Spr_stop_d = $_POST['SprStop'];


  $sql = "INSERT INTO Parametroi_dianomis (max_books, max_semesters, max_winter, max_spring, winter_start_date, winter_stop_date, spring_start_date, spring_stop_date)
          VALUES ('$Max_books', '$Max_sem', '$Max_winter', '$Max_spring', '$Win_start_d', '$Win_stop_d', '$Spr_start_d', '$Spr_stop_d')";

  mysqli_query($conn, $sql);

  header("Location: ../subpages/secret_parameters.php?add_parameters=success");
