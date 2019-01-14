<?php
  include_once 'dbh.inc.php';

  $LessID = $_POST['LessID'];
  $LessTitle = $_POST['LessTitle'];
  $selHalf = $_POST['selHalf'];
  if (($selHalf % 2) == 0)
    {$LessSeason = $_POST['Xeimerino'];}
  else
    {$LessSeason = $_POST['Earino'];}

  $sql1 = "DELETE FROM Lessons WHERE Uni_lesson_id='$LessID'";
  $sql2 = "INSERT INTO Lessons (Uni_lesson_id, Uni_less_half, Uni_lesson_title, Uni_season)
    VALUES ('$LessID', '$selHalf', '$LessTitle', '$LessSeason')";

  mysqli_query($conn, $sql1);
  mysqli_query($conn, $sql2);

  header("Location: ../subpages/secret_edit_less.php?add_lesson=success");
