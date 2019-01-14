<?php
  $current = 'secret';
  require "../header.php"
?>
    <main>

      <div class="about_nav">
        <ul>
          <li class="current"><a href="secret_courses.php" >Πρόγραμμα Σπουδών</a>            <div class="about_nav_subtext">
          Προσθήκη Μαθήματος
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
            <li>Προσθήκη Μαθήματος</li>
          </ul>
      </div>

      <form action="../includes/add_lesson.inc.php" method="POST">
        <table id="t01">
            <caption style="font-size:200%;">Επιλογές Μαθήματος</caption>
            <tr>
              <th>Κωδικός Μαθήματος</th>
              <th>Όνομα Μαθήματος</th>
              <th>Περίοδος</th>
              <th>Εξάμηνο</th>
              <th>Καθηγητές</th>
              <th>Τρόπος Διανομής</th>
            </tr>

            <tr>
              <td><input type="text" name="LessID" placeholder="πχ Κ10"  ></td>
              <td><input type="text" name="LessTitle" ></td>
              <td><select class="Half" name="selHalf">
                <option selected="selected"></option>
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
                <option selected="selected"></option>
                <option value="Earino">  Earino</option>
                <option value="Xeimerino">  Xeimerino</option>
              </select></td>
              <td><input type="text" name="LessProf" ></td>
              <td><select class="Publication" name="selPublication">
                <option selected="selected"></option>
                <option value="Den Dianemontai">  Δεν Διανέμονται</option>
                <option value="Apo ton Eudoxo">  Από τον Εύδοξο</option>
                <option value="Apo tous Kathigites">  Από τους Καθηγητές</option>
              </select></td>
            </tr>
        </table>

        <button class="button_proceed" type="submit" name"submit" style="float:right">Αποθήκευση και Συνέχεια</button>
        <input class="button_delete" type="reset" value="Διόρθωση και Επανάληψη">
      </form>


      <form action="secret_courses.php">
        <br><input type="submit" class="button_return" value="Επιστροφή" style="width: 200px; margin: auto;">
      </form>



    </main>
<?php require "../footer.php" ?>
