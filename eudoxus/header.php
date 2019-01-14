<?php
    session_start();
?>
<html lang="gr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php
      if($current=='about'){ echo "Σχετικά με τον Εύδοξο";}
      elseif($current=='connect'){ echo "Σύνδεση";}
      elseif($current=='contact'){ echo "Επικοινωνία";}
      elseif($current=='student'){ echo "Φοιτητές - Δήλωση Συγγραμμάτων";}
      elseif($current=='secret'){ echo "Γραμματείες Τμημάτων";}
      elseif($current=='edit'){ echo "Επεξεργασία Στοιχείων";}
      elseif($current=='recover'){ echo "Ανάκτηση Κωδικού";}
     ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script type="text/javascript" language="JavaScript">

        function enable(){
          document.getElementById("studentInst").disabled=false;
          document.getElementById("AMsignup").disabled=false;
          document.getElementById("studentDepart").disabled=false;
          document.getElementById("YearStudent").disabled=false;
          document.getElementById("studentInst").required=true;
          document.getElementById("AMsignup").required=true;
          document.getElementById("studentDepart").required=true;
          document.getElementById("YearStudent").required=true;
        }

        function disable(){
          document.getElementById("studentInst").disabled=true;
          document.getElementById("AMsignup").disabled=true;
          document.getElementById("studentDepart").disabled=true;
          document.getElementById("YearStudent").disabled=true;
        }

        function enable2(){
          document.getElementById("selectionStudent").disabled=false;
        }

        function accordion(){
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
          acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
              panel.style.display = "none";
            } else {
              panel.style.display = "block";
            }
          });
        }
      }
      </script>
    <link rel="stylesheet" href="../style.css">
  </head>
    <header>
      <div class="about_bar">
        <ul>
          <li><a href="help.php">Βοήθεια</a></li>
          <li <?php if($current=='contact') {echo 'class="inside"';} ?>><a href="contact.php">Επικοινωνία</a></li>
          <li  <?php if($current=='about') {echo 'class="inside"';} ?>><a href="about.php">Σχετικά με τον Εύδοξο</a></li>
          <?php if (isset($_SESSION['userID'])) {
            echo '<li><a href="../includes/logout.inc.php" name="logout-submit">Αποσύνδεση</a></li>'; }
          else {
            echo '<li> <a href="connect.php">Σύνδεση/Εγγραφή</a></li>';
          }
           ?>
        </ul>
      </div>
      <div class="below_about">
        <a href="../index.php"><img class="logo" src="..\images\logo.png" alt=" Εύδοξος logo"></a>
        <nav>
          <ul>
            <li <?php if($current=='student') {echo 'class="current"';} ?> ><a href="student_form_1.php">Φοιτητές</a></li>
            <li <?php if($current=='publish') {echo 'class="current"';} ?> ><a href="#">Εκδότες</a></li>
            <li <?php if($current=='secret') {echo 'class="current"';} ?> ><a href="../includes/checklogin.inc.php" type="submit" name="secret-enter">Γραμματείες Τμημάτων</a></li>
            <li><a href="#">Διαθέτες Δωρεάν Ηλετρονικών <br>Βοηθημάτων και Σημειώσεων</a></li>
            <li><a href="#">Βιβλιοθήκες</a></li>
            <li><a href="#">Σημεία Διανομής</a></li>
          </ul>
        </nav>
      </div>
    </header>
