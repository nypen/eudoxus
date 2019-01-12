<?php
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
              <td><input type="text" name="nickName" size="20" id="userName" placeholder="Λατινικοί Χαρακτήρες και Αριθμοί" required></td>
            </tr>
            <tr>
              <td><label for="password">Κωδικός Πρόσβασης:<span class="required">*</span></label></td>
              <td><input type="password" name="pwd" size="20" id="password" required></td>
            </tr>
            <tr>
              <td><label for="password">Επιβεβαιώστε τον κωδικό:<span class="required">*</span></label></td>
              <td><input type="password" name="repeat-pwd" size="20" id="re-password" required></td>
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
              <td><input type="text" name="userEmail" size="20" id="userName" placeholder="Του ιδρύματος ή του φορέα εργασίας" required></td>
            </tr>
            <tr>
              <td><label for="UserCategory">Κατηγορία Χρήστη:<span class="required">*</span> </label></td>
              <td><select class="UserCategory" name="userCateg" required>
                <option value="" selected="selected" onclick="handleOther(this.value);">Επιλέξτε Κατηγορία</option>
                <option value="student" onclick="handleOther(this.value);">Φοιτητής</option>
                <option value="Secret" onclick="handleOther(this.value);">Γραμματεία Τμήματος</option>
                <option value="Publisher" onclick="handleOther(this.value);">Εκδοτικός Οίκος</option>
              </select></td>
              </tr>
              <tr>
                <td><label for="userIn">Ινστιτούτο:</label></td> <!-- Me to php na emfanizetai mono an exei epilexthei kathgoria foithths -->
                <td><select class="institutes" name="selInstitute"  required >   <!-- disabled="" --> 
                  <option selected="selected">Επιλέξτε Πανεπιστήμιο/ΤΕΙ</option>
                  <option value="ΕΚΠΑ">  Εθνικό Καποδιστριακό Πανεπιστήμιο</option>
                  <option value="ΕΜΠ">  Εθνικό Μετσόβιο Πολυτεχνείο</option>
                  <option value="ΠΑΔΑ">  Πανεπιστήμιο Δυτικής Αττικής</option>
                  <option value="ΠΑΠΙ">  Πανεπιστήμιο Πειραιἀ</option>
                  <option value="ΧΠ">  Χαροκόπειο Πανεπιστήμιο</option>
                </select></td>
              </tr>
              <tr>
                <td><label for="userID">ΑΜ:</label></td> <!-- Me to php na emfanizetai mono an exei epilexthei kathgoria foithths -->
                <td><input type="text" name="AMnum" size="20" required onsubmit="return validateID(this);" action="money.aspx" method="get"></td>   <!-- disabled="" -->
              </tr>
              <tr>
                <td><label for="userDepartment">Τμήμα Φοίτησης</label></td> <!-- Me to php na emfanizetai mono an exei epilexthei kathgoria foithths -->
                <td><input type="text" name="userDep" size="20" id="userName" required></td>   <!-- disabled="" -->
                <tr>
                  <td><label for="useryear">Έτος Πρώτης Εγγραφής: </label></td> <!-- Me to php na emfanizetai mono an exei epilexthei kathgoria foithths -->
                  <td><input type="text" name="year" size="20" id="userName" required></td>   <!-- disabled="" -->
                </tr>
              </tr>

          </tbody></table>
        <!--  <input class="submit" type="submit" name="sign_up-submit"value="Εγγραφή"> -->
        <button class="submit" type="submit" name="sign_up-submit">Εγγραφή</button>
        </form>
    </div>
    </main>
    <<?php require "../footer.php" ?>>
