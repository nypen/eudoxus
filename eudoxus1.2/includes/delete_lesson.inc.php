<?php
  include_once 'dbh.inc.php';

  $LessID = $_GET['id'];

  $sql3 = "DELETE FROM Lessons WHERE Uni_lesson_id='$LessID'";

  mysqli_query($conn, $sql3);
  header("Location: ../subpages/secret_edit_less.php?add_lesson=success");
