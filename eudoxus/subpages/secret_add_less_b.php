<?php
  $current = 'secret_courses';
  include_once '../includes/dbh.inc.php';
  require "../header.php";

?>

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

      <form action="/action_page.php">
        <table id="t02">
          <caption style="font-size:200%;">Επιλογές Συγγραμμάτων</caption>
          <tr>
            <th>Κωδικός Μαθήματος</th>
            <th>Όνομα Μαθήματος</th>
            <th>Περίοδος</th>
            <th>Εξάμηνο</th>
            <th></th>
            <th></th>
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
                <td><input type="checkbox" name="Επιλογή 1η" value="Επιλογή 1η"></td>
                <td><input type="submit" value = "Επεξεργασία Συγγράμματος"></td>
                </td>
              <?php
              }
            }
          ?>
        </table>

        <input type="submit" value="Αποθήκευση Αλλαγών">
      </form>


    </main>
<?php require "../footer.php" ?>
