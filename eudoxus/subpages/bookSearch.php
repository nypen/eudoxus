<?php
$current = 'search';
require "../header.php"

?>
<div class="main_container">
<div class="search_database">
  <h3>Βάση Συγγραμμάτων</h3>
    <form action="bookSearch.php" method="post" name="BookSearch">
      <input type="text" name="BookSearch" placeholder=" Τίτλος ή Συγγραφέας ή Εκδοτικός Οίκος" size="70" maxlength="64">
      <input class="submit" type="submit" name="search-submit" value="Αναζήτηση"  height="5" width="5" >
  </form>

  <h3>Επιλεγμένα Συγγράμματα</h3>
  <form class="InstituteSearch" action="includes/SearchperInst.inc.php" method="get" name="InstituteSearch">
  <select class="institutes" name="selInstitute">
    <option selected="selected">Επιλέξτε Πανεπιστήμιο/ΤΕΙ</option>
    <option value="ΕΚΠΑ">  Εθνικό Καποδιστριακό Πανεπιστήμιο</option>
    <option value="ΕΜΠ">  Εθνικό Μετσόβιο Πολυτεχνείο</option>
    <option value="ΠΑΔΑ">  Πανεπιστήμιο Δυτικής Αττικής</option>
    <option value="ΠΑΠΙ">  Πανεπιστήμιο Πειραιἀ</option>
    <option value="ΧΠ">  Χαροκόπειο Πανεπιστήμιο</option>
  </select>
  <input class="submit" type="submit" name="searchInst-submit"value="Αναζήτηση"  height="5" width="5" >
  </form>

  <?php
  require '../includes/dbh.inc.php';
  $search = $_POST['BookSearch'];
  $sql = "SELECT * FROM book WHERE BookPublisher=? OR BookTitle=? OR BookWriter=?";
  $stmt = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt, $sql)){
    exit();
  }
  else{
    mysqli_stmt_bind_param($stmt,"sss",$search,$search,$search);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $queryResult = mysqli_num_rows($result);
    echo "<div class=\"search_database\"><h3>".$queryResult." results found </h3>";
    while($row = mysqli_fetch_assoc($result)) {
      echo "<div class=\"search_database\"><h3>".$row['BookTitle']."</h3>";
      echo "<div class=\"search_database\"><h3>".$row['BookPublisher']."</h2>";
      echo "<div class=\"search_database\"><h3>".$row['BookWriter']."</h2>";
      echo "<div class=\"search_database\"><h3>".$row['NumOfCopies']."</h2>";
    }
    echo "</div>";
  }
   ?>
</div>
