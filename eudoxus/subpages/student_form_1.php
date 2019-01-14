<?php
$current = 'student';
require "../header.php"

?>


</script>
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
            <li><a href="student.html">Φοιτητές</a> > </li>
            <li>Επιλογή Πανεπιστημίου</li>
          </ul>
        </div>


          <div class="student_forms" onload="document.selected.disabled=true" >
          <form name="formchecked" class="selectInst" action="student_form_1_2.php" method="post">
            <select id="select1" class="institutes" name="select1" onchange="populate()">
              <option selected="selected">Επιλέξτε Πανεπιστήμιο/ΤΕΙ</option>
              <?php
                require '../includes/dbh.inc.php';
                $sql = "SELECT * FROM institutes";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                  exit();
                }
                else{
                  mysqli_stmt_execute($stmt);
                  $result = mysqli_stmt_get_result($stmt);
                  while($row = mysqli_fetch_assoc($result)) {
                    echo "<option value=".$row['InstShortName'].">".$row['InstituteName']."</option>";
                  }
                }
              ?>
            </select>
            <input class="submit-student1" type="submit" name="submit-student" value="Συνέχεια">
          </form>

          </div>
