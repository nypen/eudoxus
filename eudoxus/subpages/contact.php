<?php
  $current = 'contact';
  require "../header.php"
?>
<main>
  <div class="main_container">
    <div class="path">
      <ul>
        <li><a href="../index.html">Αρχική</a> > </li>
        <li><a href="contact.html">Επικοινωνία</a></li>
      </ul>
    </div>
    <h2>Επικοινωνηστε μαζι μας</h2>
    <p>Με το Γραφείο Αρωγής Χρηστών μπορείτε να επικοινωνήσετε τηλεφωνικά στο 215 215 7850 είτε συμπληρώνοντας την παρακάτω φόρμα.</p>
      <table id="contact_form">
        <tbody>
          <tr>
          <td>Ονοματεπώνυμο:</td>
          <td><input type="text" name="txtFrom" id="FromName" size="20" maxlength="250"></td>
          </tr>
          <tr>
          <td>Τηλέφωνο Επικοινωνίας:</td>
          <td><input type="text" name="phone" id="PhoneNum" size="20" maxlength="250"></td>
          </tr>
          <tr>
          <td>Πληκτρολογήστε την ηλεκτρονική σας διεύθυνση:</td>
          <td><input type="text" name="txtFrom" id="emailFrom" size="20" maxlength="250"></td>
        </tr>
        <tr>
        <td>Κατηγορία Χρήστη:</td>
        <td><select class="UserCategory" name="">
          <option value="Student">Φοιτητής</option>
          <option value="Secret">Γραμματεία Τμήματος</option>
          <option value="Publisher">Εκδοτικός Οίκος</option>
        </select>
        </tr>
        <tr>
          <td>Το μήνυμα σας:</td>
          <td><textarea name="txtBody" id="emailBody" cols="50" rows="10"></textarea></td>
        </tr></tbody>
    </table>
    <input class="submit_contact" type="submit" value="Αποστολή">
  </div>
</main>
  <<?php require "../footer.php" ?>>
