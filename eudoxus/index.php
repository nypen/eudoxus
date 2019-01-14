<?php session_start(); ?>
<html lang="gr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Εύδοξος - Αρχική</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
      <div class="about_bar">
        <ul>
          <li><a href="#">Βοήθεια</a></li>
          <li><a href="subpages/contact.php">Επικοινωνία</a></li>
          <li><a href="subpages/about.php">Σχετικά με τον Εύδοξο</a></li>
          <?php if (isset($_SESSION['userID'])) {
            echo '<li><a href="includes/logout.inc.php" name="logout-submit">Αποσύνδεση</a></li>'; }
          else {
            echo '<li> <a href="subpages/connect.php">Σύνδεση/Εγγραφή</a></li>';
          }
           ?>
      </div>
      <div class="below_about">
        <a href="index.php"><img class="logo"src="images\logo.png" alt=" Εύδοξος logo"></a>
        <nav>
          <ul>
            <li><a href="subpages/student_form_1.php">Φοιτητές</a></li>
            <li><a href="#">Εκδότες</a></li>
            <li><a href="includes/checklogin.inc.php" type="submit"name="secret-enter">Γραμματείες Τμημάτων</a></li>
            <li><a href="#">Διαθέτες Δωρεάν Ηλετρονικών <br>Βοηθημάτων και Σημειώσεων</a></li>
            <li><a href="#">Βιβλιοθήκες</a></li>
            <li><a href="#">Σημεία Διανομής</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <main>
    <div class="news_box">
      <h3><a href="subpages/news.html">Νέα-Ανακοινώσεις</a></h3>
          <ul>
            <li>Ανακοίνωση 1</li>
            <li>Ανακοίνωση 2</li>
            <li>Ανακοίνωση 3</li>
            <li>Ανακοίνωση 4</li>
            <li>Ανακοίνωση 5</li>
            <li>Ανακοίνωση 6</li>
            <li>Ανακοίνωση 7</li>
            <li><a href="#news8">Ανακοίνωση 8</a></li>
          </ul>
          <img src="images/AtlasPortalLogo.png" alt="Άτλας Logo">
          <img src="images/diavlos_logo_wide_el.png" alt="Δίαυλος logo">
          <img src="images/ee_1.png" alt="Ευρωπαϊκό Ταμείο Περιφερειακής Ανάπτυξης">
        </div>
        <div class="main_container">
          <div class="path">
            <ul>
              <li><a href="index.php">Αρχική</a></li>
            </ul>
          </div>
          <div class="search_database">
            <h3>Βάση Συγγραμμάτων</h3>
              <form action="subpages/bookSearch.php" method="post" name="BookSearch">
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
          </div>
        </div>
    </main>
    <footer>
      <h6>Με τη συγχρηματοδότηση της Ελλάδας & της Ευρωπαϊκής Ένωσης</h6>
      <img src="images/espa_1.jpg" alt="ΕΣΠΑ">
      <img src="images/minedu2.jpg" alt="Υπουργείο Παιδείας Έρευνας και Θρησκευμάτων">
    </footer>
    </body>
    </html>
