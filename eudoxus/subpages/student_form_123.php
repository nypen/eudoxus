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
            <li><a href="student_form_1.php">Φοιτητές</a> > </li>
            <li><a href="student_form_1.php">Eπιλογή Πανεπιστημίου</a> > </li>
            <li><a href="student_form_1_2.php">Eπιλογή Τμήματος</a> > </li>
            <li><u>Eπιλογή Συγγραμμάτων</u></li>
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
        <form class="selectInst" action="student_form_1234.php" method="post" name="selected">
        <table>
          <tbody>
            <ul>
              <?php
              require '../includes/dbh.inc.php';
              $dep = $_POST['select2'];
              $sql = "SELECT * FROM subjects WHERE subDep=? ";
              $stmt = mysqli_stmt_init($conn);
              if(!mysqli_stmt_prepare($stmt, $sql)){
                exit();
              }
              else{
                mysqli_stmt_bind_param($stmt,"s",$dep);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
              }
              for($x=1;$x<9;$x+=2){
                echo "<li class=\"semesters\"> Εξάμηνο ".$x."<ol>";
                $dep = $_POST['select2'];
                $sql = "SELECT * FROM subjects WHERE subDep=? ";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                  exit();
                }
                else{
                  mysqli_stmt_bind_param($stmt,"s",$dep);
                  mysqli_stmt_execute($stmt);
                  $result = mysqli_stmt_get_result($stmt);
                }
                while($row = mysqli_fetch_assoc($result)) {
                  if($row['subSem'] == $x ){
                    echo "<li> ".$row['subName']."";
                    echo"<p><input type=\"checkbox\" name=\"box\" value=".$row['subBook'].">".$row['subBook']."</li></p>";
                  }
                }
                echo "</ol></li>";
              }
             ?>
             <input class="submit-student1" type="submit" name="submit-student" value="Συνέχεια">
           </table>
         </form>
         </tbody>

       </ul>
     </main>
             <script>
             var acc = document.getElementsByClassName("accordion");
             var i;

             for (i = 0; i < acc.length; i++) {
               acc[i].addEventListener("click", function() {
                 this.classList.toggle("active");
                 var panel = this.nextElementSibling;
                 if (panel.style.maxHeight){
                   panel.style.maxHeight = null;
                 } else {
                   panel.style.maxHeight = panel.scrollHeight + "px";
                 }
               });
             }
             </script>
             <?php require "../footer.php" ?>
