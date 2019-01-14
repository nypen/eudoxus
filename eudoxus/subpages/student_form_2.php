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
          <div class="student_forms" onload="document.selected.disabled=true" >
            <p>Έχετε δηλώσει:</p>
          </div>
          <table name="" action="">
            <a class="back-student" href="student_form_1.php">Πίσω</a>
            <input class="submit-student" type="submit" name="submit-student" value="Συνέχεια">
            <p class="exchange">Ανταλλαγή Συγγραμμάτων<input type="checkbox" name="exchange" value="Ανταλλαγή Συγγραμμάτων"></p>
            <tbody class="form2-student">
              <tr>
                <th>Τίτλος Συγγράμματος</th>
                <th>Μάθημα</th>
                <th>Παραλαβή από Φοιτητή</th>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td><input type="checkbox" name="RecFromStudent"></td>
              </tr>
            </tbody></table>
      </div>
      </main>
    <<?php require "../footer.php" ?>
