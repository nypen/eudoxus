<?php
  $current = 'secret';
  include_once '../includes/dbh.inc.php';
  require "../header.php"
?>
  <main>

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
        <li><a href="secret_parameters.php">Παράμετροι Διανομής</a> > </li>
        <li>Επεξεργασία Παραμέτρων Διανομής</li>
      </ul>
    </div><br>

    <form action="../includes/edit_parameters.inc.php" method="GET">
      <?php
      $sql = "SELECT * FROM Parametroi_dianomis;";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);
      $row = mysqli_fetch_assoc($result)
      ?>
      <div class="txt_indent_b">
        <b>Συνολικός Αριθμός Συγγραμμάτων:</b><br>
      </div>
      <div class="txt_indent_a">
        <input type="text" name="MaxBooks" placeholder="<?php echo $row['max_books']?>"><br>
      </div>
      <div class="txt_indent_a">
        <i>Μέγιστος αριθμός μαθημάτων που είναι απαραίτητος για τη λήψη πτυχίου</i><br>
      </div><br>

      <div class="txt_indent_b">
        <b>Αριθμός εξαμήνων παραπάνω από το τρέχον που επιτρέπεται να δηλώσει ο φοιτητής μαθήματα:</b><br>
      </div>
      <div class="txt_indent_a">
        <input type="text" name="MaxSem" placeholder="<?php echo $row['max_semesters']?>"><br>
      </div>
      <div class="txt_indent_a">
        <i>Πλήθος των επιπλέον εξαμήνων από το τρέχον εξάμηνο κάθε φοιτητή, για τα οποία επιτρέπεται οι φοιτητές να δηλώνουν μαθήματα</i><br>
      </div><br>

      <div class="txt_indent_b">
        <b>Μέγιστος αριθμός μαθημάτων Χειμερινού εξαμήνου:</b><br>
      </div>
      <div class="txt_indent_a">
        <input type="text" name="MaxWin" placeholder="<?php echo $row['max_winter']?>"><br>
      </div>
      <div class="txt_indent_a">
        <i>Μέγιστος αριθμός μαθημάτων,  Χειμερινού εξαμήνου, για τα οποία μπορεί να λάβει σύγρραμα ο φοιτητής</i><br>
      </div><br>

      <div class="txt_indent_b">
        <b>Μέγιστος αριθμός μαθημάτων Εαρινού εξαμήνου:</b><br>
      </div>
      <div class="txt_indent_a">
        <input type="text" name="MaxSpr" placeholder="<?php echo $row['max_spring']?>"><br>
      </div>
      <div class="txt_indent_a">
        <i>Μέγιστος αριθμός μαθημάτων,  Εαρινού εξαμήνου, για τα οποία μπορεί να λάβει σύγρραμα ο φοιτητής</i><br>
      </div><br>

      <div class="txt_indent_b">
        <b>Ημερομηνία έναρξης δήλωσης συγγραμμάτων Χειμερινού εξαμήνου:</b><br>
      </div>
      <div class="txt_indent_a">
        <input type="text" name="WinStart" placeholder="<?php echo $row['winter_start_date']?>"><br>
      </div>
      <div class="txt_indent_a">
        <i>Ημερομηνία έναρξης περιόδου δήλωσης συγγραμμάτων</i><br>
      </div><br>

      <div class="txt_indent_b">
        <b>Ημερομηνία Λήξης Δήλωσης Συγγραμμάτων Χειμερινού εξαμήνου:</b><br>
      </div>
      <div class="txt_indent_a">
        <input type="text" name="WinStop" placeholder="<?php echo $row['winter_start_date']?>"><br>
      </div>
      <div class="txt_indent_a">
        <i>Ημερομηνία λήξης περιόδου δήλωσης συγγραμμάτων</i><br>
      </div><br>

      <div class="txt_indent_b">
        <b>Ημερομηνία έναρξης δήλωσης συγγραμμάτων Εαρινού εξαμήνου:</b><br>
      </div>
      <div class="txt_indent_a">
        <input type="text" name="SprStart" placeholder="<?php echo $row['spring_start_date']?>"><br>
      </div>
      <div class="txt_indent_a">
        <i>Ημερομηνία έναρξης περιόδου δήλωσης συγγραμμάτων</i><br>
      </div><br>

      <div class="txt_indent_b">
        <b>Ημερομηνία Λήξης Δήλωσης Συγγραμμάτων Εαρινού εξαμήνου:</b><br>
      </div>
      <div class="txt_indent_a">
        <input type="text" name="SprStop" placeholder="<?php echo $row['spring_stop_date']?>"><br>
      </div>
      <div class="txt_indent_a">
        <i>Ημερομηνία λήξης περιόδου δήλωσης συγγραμμάτων</i><br>
      </div><br>

      <div class="txt_indent_b">
        <input class="button_proceed" type="submit" value="Αποθήκευση Αλλαγών" style="float:right">
        <input class="button_delete" type="reset" value="Εκκαθάριση Πεδίων" style="float:right">
        <form action="secret_parameters.php">
          <input type="submit" class="button_return" value="Επιστροφή" style="float:left">
        </form>
      </div><br>
    </form>



  </main>
<<?php require "../footer.php" ?>>
