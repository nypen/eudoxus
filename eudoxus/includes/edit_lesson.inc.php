<?php
  include_once 'dbh.inc.php';

  $LessID = $_GET['LessID'];
  $LessTitle = $_GET['LessTitle'];
  $selHalf = $_GET['selHalf'];
  if (($selHalf % 2) == 0)
    {$LessSeason = 'Earino';}
  else
    {$LessSeason = 'Xeimerino';}
  $LessProff = $_GET['LessProf'];
  $selPublication = $_GET['selPublication'];

  $sql = "UPDATE Lessons SET Uni_lesson_title = '$LessTitle', Uni_less_half = '$selHalf', Uni_season = '$LessSeason', Uni_less_proff = '$LessProff', Uni_less_publication = '$selPublication' WHERE Uni_lesson_id = '$LessID'";

  mysqli_query($conn, $sql);

  header("Location: ../subpages/secret_edit_less.php?edit_lesson=success");
