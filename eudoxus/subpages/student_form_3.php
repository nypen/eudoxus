<?php
$current = 'student';
require "../header.php"

?>
    <main>

      <div class="about_nav">
        <ul>
          <li class="current"><a href="#" >Δήλωση Συγγραμμάτων</a></li>
          <li><a href="#">Ανταλλαγή Συγγραμμάτων</a></li>
          <li><a href="#">Αρχείο Δηλώσεων</a></li>
        </ul>
      </div>
      <div class="student_container">
        <div class="path">
          <ul>
            <li><a href="../index.php">Αρχική</a> > </li>
            <li><a href="student.php">Φοιτητές</a> > </li>
            <li>Δήλωση Συγγραμμάτων</li>
          </ul>
        </div>
          <p>Τρέχον Εξάμηνο: <script type="text/JavaScript">
          var date = new Date();
          var month = date.getMonth();

          if ((month > 9) || (month < 2)) {
            document.write('Χειμερινό Εξάμηνο');
            }
          else {
            document.write('Εαρινό Εξάμηνο');
            }
          </script></p>
          <div class="student_forms">
            <p>Είστε σίγουροι:</p>
          </div>
          <table name="" action="">
            <a class="back-student" href="student_form_1.php">Διόρθωση</a>
            <input class="generate" type="submit" name="submit-student" value="Κωδικός Παραλαβής" action="../includes/generatecode.php">
            <input class="submit-student" type="button" name="submit-student" value="Τελική Υποβολή" onclick="../includes/checklogin.inc.php">
            <tbody class="form2-student">
              <tr>
                <th>Τίτλος Συγγράμματος</th>
                <th>Μάθημα</th>
                <th>Σημείο Παραλαβής</th>
                <th>Απόθεμα</th>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody></table>
      </div>
      </main>
    <<?php require "../footer.php" ?>
