<?php
  $current = 'signup';
  require "../header.php"
?>
    <main>
      <div class="connect_container">
        <div class="path">
          <ul>
            <li><a href="../index.php">Αρχική</a> > </li>
            <li><a href="sign_up.php">Εγγραφή</a></li>
          </ul>
        </div>
        <p>Παρακαλώ συπληρώστε τα στοιχεία σας.</p>
        <form  method="post" action="../includes/registration.inc.php">
          <table>
            <tbody><tr>
              <td><label for="user">Ψευδώνυμο:<span class="required">*</span></label></td>
              <td><input type="text" name="nickName" size="20" id="nickName" placeholder="Λατινικοί Χαρακτήρες και Αριθμοί" required></td>
            </tr>
            <tr>
              <td><label for="password">Κωδικός Πρόσβασης:<span class="required">*</span></label></td>
              <td><input type="password" name="pwd" size="20" id="pwd" required></td>
            </tr>
            <tr>
              <td><label for="password">Επιβεβαιώστε τον κωδικό:<span class="required">*</span></label></td>
              <td><input type="password" name="repeat-pwd" size="20" id="repeat-pwd" required></td>
            </tr>
            <tr>
              <td><label for="userFirstName">Όνομα:<span class="required">*</span></label></td>
              <td><input type="text" name="FirstName" size="20" id="FirstName" onblur="this.value=this.value.toUpperCase();" required></td>
            </tr>
            <tr>
              <td><label for="userLastName">Επώνυμο:<span class="required">*</span></label></td>
              <td><input type="text" name="LastName" size="20" id="LastName" onblur="this.value=this.value.toUpperCase();" required></td>
            </tr>
            <tr>
              <td><label for="userEmail">Ηλεκτρονική Διεύθυνση:<span class="required">*</span></label></td>
              <td><input type="text" name="userEmail" size="20" id="userEmail" placeholder="Του ιδρύματος ή του φορέα εργασίας" required></td>
            </tr>
            <tr>
              <td><label for="UserCategory">Κατηγορία Χρήστη:<span class="required">*</span> </label></td>
              <td>
                <select id="selectCat" name="selectCat" required>
                <option>Επιλέξτε Κατηγορία</option>
                <option value="student" type="button" onclick="enable()">Φοιτητής/Φοιτήτρια</option>
                <option value="secret" type="button" onclick="disable()">Γραμματεία Τμήματος</option>
                <option value="publisher" type="button" onclick="disable()">Εκδοτικός Οίκος</option>
              </select></td>
              </tr>
              <tr>
                <td><label for="userIn">Ινστιτούτο:</label></td>
                <td><select  id="studentInst" class="institutes" name="selInstitute" disabled="">   <!-- disabled="" -->
                  <option selected="selected">Επιλέξτε Πανεπιστήμιο/ΤΕΙ</option>
                  <option value="ΕΚΠΑ">  Εθνικό Καποδιστριακό Πανεπιστήμιο</option>
                  <option value="ΕΜΠ">  Εθνικό Μετσόβιο Πολυτεχνείο</option>
                  <option value="ΠΑΔΑ">  Πανεπιστήμιο Δυτικής Αττικής</option>
                  <option value="ΠΑΠΙ">  Πανεπιστήμιο Πειραιἀ</option>
                  <option value="ΧΠ">  Χαροκόπειο Πανεπιστήμιο</option>
                </select></td>
              </tr>
              <tr>
                <td><label for="userID">ΑΜ:</label></td>
                <td><input id="AMsignup" type="text" name="AMnum" size="20" disabled=""></td>
              </tr>
              <tr>
                <td><label for="userDepartment">Τμήμα Φοίτησης</label></td>
                <td><input type="text" name="userDep" size="20" id="studentDepart" disabled=""></td>
                <tr>
                  <td><label for="useryear">Έτος Πρώτης Εγγραφής: </label></td>
                  <td><input type="text" name="year" size="20" id="YearStudent" disabled=""></td>   
                </tr>
              </tr>

          </tbody></table>
        <button class="submit" type="submit" name="sign_up-submit">Εγγραφή</button>
        </form>
    </div>
    </main>
    <<?php require "../footer.php" ?>>
