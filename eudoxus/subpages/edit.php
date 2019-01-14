<?php
  $current = 'edit';
  require "../header.php"
?>
<main>
  <div class="connect_container">
    <div class="path">
      <ul>
        <li><a href="../index.php">Αρχική</a> > </li>
        <li><a href="edit.php">Επεξεργασία Στοιχείων</a></li>
      </ul>
      <p>Τα στοιχεία σας:</p>
      <form class="" action="" method="post">
        <table>
          <tbody>
            <tr>
              <td><label for="user">Ψευδώνυμο:</label></td>
              <td><input type="text/html"  name="nickName" size="20" value=""  id="nickName"></td>
            </tr>
          </tbody>
        </table>
      </form>
    </div>

  </div>
</main>
<<?php require "../footer.php" ?>>
