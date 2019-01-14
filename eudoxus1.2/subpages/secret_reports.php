<?php
  $current = 'secret_reports';
  require "../header.php"
?>

  <main>

      <div class="about_nav">
        <ul>
          <li><a href="secret_courses.php" >Πρόγραμμα Σπουδών</a></li>
          <li><a href="secret_parameters.php">Παράμετροι Διανομής</a></li>
          <li><a href="secret_other_sch.php">Σύνδεση Με Άλλα Τμήματα</a></li>
          <li class="current"><a href="secret_reports.php">Αναφορές</a></li>
        </ul>
      </div>

      <div class="about_container">
        <div class="path">
          <ul>
            <li><a href="../index.php">Αρχική</a> > </li>
            <li><a href="secret.php">Γραμματείες Τμημάτων</a> > </li>
            <li>Αναφορές</li>
          </ul>
        </div>

        <h5>ΣΥΓΓΝΩΜΗ! Η ΣΕΛΙΔΑ ΠΟΥ ΨΑΝΧΕΤΕ ΕΙΝΑΙ ΥΠΟ ΚΑΤΑΣΚΕΥΗ! </h5>
        <form action="secret.php">
          <input type="submit" class="button_return" value="Επιστροφή" style="float:left">
        </form>

    </main>
<?php
  require "../footer.php"
?>
