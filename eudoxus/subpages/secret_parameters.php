<?php
  $current = 'secret_courses';
  include_once '../includes/dbh.inc.php';
  require "../header.php";

?>
  <main>

    <div class="about_nav">
      <ul>
        <li><a href="secret_courses.php" >Πρόγραμμα Σπουδών</a></li>
        <li class="current"><a href="secret_parameters.php">Παράμετροι Διανομής</a></li>
        <li><a href="secret_other_sch.php">Σύνδεση Με Άλλα Τμήματα</a></li>
        <li><a href="secret_reports.php">Αναφορές</a></li>
      </ul>
    </div>

    <div class="about_container">
    <div class="path">
      <ul>
        <li><a href="../index.php">Αρχική</a> > </li>
        <li><a href="secret.php">Γραμματείες Τμημάτων</a> > </li>
        <li>Παράμετροι Διανομής</li>
      </ul>
    </div><br>

    <table id="t01">
      <caption style="font-size:200%;">Γενική Βάση Προγράμματος Σπουδών</caption>
      <tr>
        <th>Συνολικός Αριθμός Συγγραμμάτων</th>
        <th>Συνολικός Αριθμός Εξαμήνων</th>
        <th>Μέγιστος αριθμός μαθημάτων Χειμερινού</th>
        <th>Μέγιστος αριθμός μαθημάτων Εαρινού </th>
        <th>Ημερομηνία έναρξης Χειμερινού</th>
        <th>Ημερομηνία λήξης Χειμερινού</th>
        <th>Ημερομηνία έναρξης Εαρινού</th>
        <th>Ημερομηνία λήξης Εαρινού</th>
      </tr>

    <?php
      $sql = "SELECT * FROM Parametroi_dianomis;";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);

      if($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($result)){
        ?>
          <tr>
          <td> <?php echo $row['max_books']?></td>
          <td> <?php echo $row['max_semesters']?></td>
          <td> <?php echo $row['max_winter']?></td>
          <td> <?php echo $row['max_spring']?></td>
          <td> <?php echo $row['winter_start_date']?></td>
          <td> <?php echo $row['winter_stop_date']?></td>
          <td> <?php echo $row['spring_start_date']?></td>
          <td> <?php echo $row['spring_stop_date']?></td>
          </td>
          <?php
          }
        }else{
          ?>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <?php
        }
      ?>
    </table>

    <?php
      $sql = "SELECT * FROM Parametroi_dianomis;";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);

      if($resultCheck > 0){
        ?>
        <form action="secret_parameters_edit.php">
          <br><input type="submit" class="button_return" value="Αλλαγή" style="width: 200px; margin: auto;">
        </form>
        <?php
      }else{
        ?>
        <form action="secret_parameters_add.php">
          <br><input type="submit" class="button_proceed" value="Προσθήκη Παραμέτρων" style="width: 200px; margin: auto;">
        </form>

        <?php
      }
      ?>

  </main>
<<?php require "../footer.php" ?>>
