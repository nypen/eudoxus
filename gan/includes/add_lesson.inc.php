<?php
  include_once 'dbh.inc.php';

  $LessID = $_POST['LessID'];
  $LessTitle = $_POST['LessTitle'];
  $selHalf = $_POST['selHalf'];
  if (($_POST['selHalf'] % 2) == 0)
    {$LessSeason = $_POST['Xeimerino'];}
  else
    {$LessSeason = $_POST['Earino'];}

  $sql = "INSERT INTO Lessons (Uni_lesson_id, Uni_less_half, Uni_lesson_title, Uni_season)
    VALUES ('$LessID', '$selHalf', '$LessTitle', '$LessSeason')";

  mysqli_query($conn, $sql);

  header("Location: ../subpages/secret_add_less_b.php?add_lesson=success");
