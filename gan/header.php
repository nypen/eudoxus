<?php session_start();?>
<html lang="gr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php
      echo "Σχετικά με τον Εύδοξο";
     ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
  </head>
  <body onload="document.frmReferrer.txtOther.disabled=true;
              document.frmReferrer.txtOther.value='not applicable' ">
    <header>
      <div class="about_bar">
        <ul>
          <li><a href="help.php">Βοήθεια</a></li>
          <li <?php if($current=='contact') {echo 'class="inside"';} ?>><a href="contact.php">Επικοινωνία</a></li>
          <li  <?php if($current=='about') {echo 'class="inside"';} ?>><a href="about.php">Σχετικά με τον Εύδοξο</a></li>
          <?php if (isset($_SESSION['userID'])) { echo '<li><a href="#"> Προφίλ Χρήστη
            <ul>
              <li>Επεξεργασία Στοιχείων</li>
              <li><a href="logout.inc.php" name="logout-submit">Αποσύνδεση</a></li>
            </ul>
          </a></li> '; }
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
