<?php
  $current = 'recover';
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
  <link rel="stylesheet" href="../style.css">
</head>
  <header>
    <div class="about_bar">
      <ul>
        <li><a href="help.php">Βοήθεια</a></li>
        <li <?php if($current=='contact') {echo 'class="inside"';} ?>><a href="contact.php">Επικοινωνία</a></li>
        <li  <?php if($current=='about') {echo 'class="inside"';} ?>><a href="about.php">Σχετικά με τον Εύδοξο</a></li>
        <?php if (isset($_SESSION['userID'])) { echo '<li class="stayopen"><a href=""> Προφίλ Χρήστη
          <ul>
          <li><a href="edit.php">Επεξεργασία</a></li>
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

<main>
  <div class="connect_container">
    <?php
      session_start();
      $sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
      if(!empty($sessData['status']['msg'])){
          $statusMsg = $sessData['status']['msg'];
          $statusMsgType = $sessData['status']['type'];
          unset($_SESSION['sessData']['status']);
      }
      ?>
    <p style="font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;">Δημιουργήστε νέο κωδικό.</p>
      <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
        <div class="container">
          <div class="regisFrm">
          <form action="../includes/account.inc.php" method="post" style="margin-left:20px;">
              <input type="password" name="password" placeholder="Κωδικός" required="">
              <input type="password" name="confirm_password" placeholder="Επιβεβαίωση Κωδικού" required="">
              <div class="send-button">
                  <input type="hidden" name="fp_code" value="<?php echo $_REQUEST['fp_code']; ?>"/>
                  <input class="submit" style="margin-left: 10px; width:200px;"type="submit" name="resetSubmit" value="Αλλαγή Κωδικού">
              </div>
          </form>
      </div>
      </div>
    </div>

  </div>
</main>
<<?php require "../footer.php" ?>>
