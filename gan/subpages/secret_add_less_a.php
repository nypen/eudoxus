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
        Κωδικός Μαθήματος: <input type="text" name="LessID" placeholder="πχ Κ10" ><br>
        Τίτλος Μαθήματος: <input type="text" name="LessTitle" placeholder="πχ Διακριτά Μαθηματικά" ><br>
        Καθηγητές Μαθήματος: <input type="text" name="LessProf" placeholder="πχ Δημήτρης Δημητρίου" ><br>
        Εξάμηνο:
        <select class="Half" name="selHalf">
          <option selected="selected">Επιλέξτε Εξάμηνο</option>
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
        </select><br>
        Διανέμονται Συγγράμματα:
        <select class="Publication" name="selPublication">
          <option selected="selected"></option>
          <option value="Δεν Διανέμονται">  Δεν Διανέμονται</option>
          <option value="Από τον Εύδοξο">  Από τον Εύδοξο</option>
          <option value="Από τους Καθηγητές">  Από τους Καθηγητές</option>
        </select><br>
        
          <button type="submit" name"submit">Αποθήκευση και Συνέχεια</button><br>
          <input type="reset" value="Διόρθωση και Επανάληψη">
      </form>



    </main>
<<?php require "../footer.php" ?>>
