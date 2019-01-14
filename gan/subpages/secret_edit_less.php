<?php
  $current = 'secret_courses';
  include_once '../includes/dbh.inc.php';
  require "../header.php";

?>

  <div class="about_nav">
    <ul>
      <li class="current"><a href="secret_courses.php" >Πρόγραμμα Σπουδών</a></li>
      <li><a href="secret_parameters.php">Παράμετροι Διανομής</a></li>
      <li><a href="secret_other_sch.php">Σύνδεση Με Άλλα Τμήματα</a></li>
      <li><a href="secret_reports.php">Αναφορές</a></li>
    </ul>
  </div>

  <div class="about_container">
    <div class="path">
      <ul>
        <li><a href="../index.php">Αρχική</a> > </li>
        <li><a href="secret.php">Γραμματείες Τμημάτων</a> > </li>
        <li><a href="secret_courses.php">Πρόγραμμα Σπουδών</a> > </li>
        <li>Επεξεργασία</li>
      </ul>
    </div>

      <table id="t01">
        <caption style="font-size:200%;">Γενική Βάση Προγράμματος Σπουδών</caption>
        <tr>
          <th>Κωδικός Μαθήματος</th>
          <th>Όνομα Μαθήματος</th>
          <th>Περίοδος</th>
          <th>Εξάμηνο</th>
          <th>Επιλογή Για Επεξεργασία</th>
        </tr>

        <?php
          $sql = "SELECT * FROM Lessons;";
          $result = mysqli_query($conn, $sql);
          $resultCheck = mysqli_num_rows($result);

          if($resultCheck > 0){
            while ($row = mysqli_fetch_assoc($result)){
            ?>
              <tr>
              <td> <?php echo $row['Uni_lesson_id']?></td>
              <td> <?php echo $row['Uni_lesson_title']?></td>
              <td> <?php echo $row['Uni_season']?></td>
              <td> <?php echo $row['Uni_less_half']?></td>
              <td>
                <form action="edit_lesson.php" method="post">
                  <input type="hidden" name="LessonID" value="<?php echo $row['Uni_lesson_id']?>">
                  <button type="submit" name"submit">Επεξεργασία</button>
                </form>
              </td>
            <?php
            }
          }
        ?>
      </table>

      <form action="secret_courses.php">
        <input type="submit" class="button_return" value="Επιστροφή" style="width: 200px; margin: auto;">
      </form>

    </main>
<?php require "../footer.php" ?>
