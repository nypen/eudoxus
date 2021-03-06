  <?php
    $current = 'connect';
    require "../header.php"
  ?>
    <main>
      <div class="connect_container">
        <div class="path">
          <ul>
            <li><a href="../index.php">Αρχική</a> > </li>
            <li><a href="connect.php">Σύνδεση</a></li>
          </ul>
        </div>
        <p>Παρακαλώ συπληρώστε τα στοιχεία σας.</p>
        <?php
          if (isset($_GET['error'])) {
            if ($_GET['error'] == "emptyfields") {
              echo '<p class="loginerror">Συμπληρώστε όλα τα πεδία!</p>';
            }
            elseif($_GET['error'] == "WrongPassword"){
              echo '<p class="loginerror">Λάθος Κωδικός!</p>';
            }
            elseif($_GET['error'] == "NoUser"){
              echo '<p class="loginerror">Ο χρήστης δεν υπάρχει!</p>';
            }
            elseif($_GET['error'] == "WrongCategory"){
              echo '<p class="loginerror">Λάθος Κατηγορία Χρήστη!</p>';
            }
          }
         ?>
        <form action="../includes/validation.inc.php" method="post">
          <table>
            <tbody><tr>
              <td><label for="userName">Ψευδώνυμο:</label></td>
              <td><input type="text" name="nickName" size="20" required></td>
            </tr>
            <tr>
              <td><label for="password">Κωδικός Πρόσβασης:</label></td>
              <td><input type="password" name="pwd" size="20" required></td>
            </tr>
            <tr>
              <td><label for="UserCategory">Κατηγορία Χρήστη: </label></td>
              <td><select class="UserCategory" name="userCateg" >
                <option selected="selected">Επιλέξτε Κατηγορία</option>
                <option value="student">Φοιτητής/Φοιτήτρια</option>
                <option value="secret">Γραμματεία Τμήματος</option>
                <option value="publisher">Εκδοτικός Οίκος</option>
              </select required></td>
            </tr>
          </tbody></table>
          <input class="submit" type="submit" name="login-submit" value="Σύνδεση">
          </form>
          <p>Αντιμετωπίζετε πρόβλημα; <a href="recover.php">Υπενθύμιση κωδικού</a></p>
          <p>Δεν είστε ακόμη χρήστης του Εύδοξου; <a href="sign_up.php">Δημιουργήστε νέο λογαριασμό.</a></p>
        </div>
    </main>
    <<?php require "../footer.php" ?>>
