<?php
  $current = '#';
  include_once '../includes/dbh.inc.php';
  require "../header.php";

?>
  <main>
      <div class="about_nav">
        <ul>
          <li class="current"><a href="secret_courses.php" >Πρόγραμμα Σπουδών</a>            <div class="about_nav_subtext">
          Προσθήκη Μαθήματος
          Επιλογές Συγγραμμάτων
          </div></li>
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
            <li><a href="secret.php">Πρόγραμμα Σπουδών</a> > </li>
            <li><a href="secret_add_less_a.php">Προσθήκη Μαθήματος</a> > </li>
            <li>Επιλογές Συγγραμμάτων</li>
          </ul>
      </div>

      <form action="../includes/edit_lesson.inc.php" method="POST">
        <table id="t03">
          <caption style="font-size:200%;">Επιλογές Μαθήματος</caption>
          <tr>
            <th>Κωδικός Μαθήματος</th>
            <th>Όνομα Μαθήματος</th>
            <th>Περίοδος</th>
            <th>Εξάμηνο</th>
            <th>Καθηγητές</th>
            <th>Τρόπος Διανομής</th>
          </tr>

          <?php
            $Lesson_ID = $_POST['LessonID'];

            $sql = "SELECT * FROM Lessons WHERE Uni_lesson_id='$Lesson_ID';";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if($resultCheck > 0){
              while ($row = mysqli_fetch_assoc($result)){
              ?>
                <tr>
                  <td><input type="text" name="LessID" placeholder="<?php echo $row['Uni_lesson_id']?>" ></td>
                  <td><input type="text" name="LessTitle" placeholder="<?php echo $row['Uni_lesson_title']?>" ></td>
                  <td><select class="Half" name="selHalf">
                    <option selected="selected"><?php echo $row['Uni_less_half']?></option>
                    <option value="1">  1</option>
                    <option value="2">  2</option>
                    <option value="3">  3</option>
                    <option value="4">  4</option>
                    <option value="5">  5</option>
                    <option value="6">  6</option>
                    <option value="7">  7</option>
                    <option value="8">  8</option>
                    <option value="9">  9 (εφόσον υπάρχει)</option>
                    <option value="10">  10 (εφόσον υπάρχει)</option>
                  </select></td>
                  <td><select class="Season" name="selSeason">
                    <option selected="selected"><?php echo $row['Uni_season']?></option>
                    <option value="Earino">  Earino</option>
                    <option value="Xeimerino">  Xeimerino</option>
                  </select></td>
                  <td><input type="text" name="LessProf" placeholder="<?php echo $row['Uni_less_proff']?>" ></td>
                  <td><select class="Publication" name="selPublication">
                    <option selected="selected"><?php echo $row['Uni_less_publication']?></option>
                    <option value="Den Dianemontai">  Δεν Διανέμονται</option>
                    <option value="Apo ton Eudoxo">  Από τον Εύδοξο</option>
                    <option value="Apo tous Kathigites">  Από τους Καθηγητές</option>
                  </select></td>
                </tr>
              <?php
              }
            }
          ?>
        </table>

        <input type="submit" class="button_proceed" value="Αποθήκευση Αλλαγών" style="float:right">
      </form>

      <form action="../includes/delete_lesson.inc.php" method="POST">
        <input type="hidden" name="LessonID" value="<?php echo $row['Uni_lesson_id']?>">
        <button type="submit" name"submit">Diagrafh</button>
      </form>

      <form action="secret_edit_less.php">
        <input type="submit" class="button_return" value="Επιστροφή" style="width: 200px; margin: auto;">
      </form>

    </main>
<?php require "../footer.php" ?>
