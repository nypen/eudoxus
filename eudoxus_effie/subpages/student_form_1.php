<?php
require "../header.php"

?>
    <main>

      <div class="about_nav">
        <ul>
          <li class="current"><a href="#" >Δήλωση Συγγραμμάτων</a></li>
          <li><a href="#">Ανταλλαγή Συγγραμμάτων</a></li>
          <li><a href="#">Αρχείο Δηλώσεων</a></li>
        </ul>
      </div>
      <div class="student_container">
        <div class="path">
          <ul>
            <li><a href="../index.php">Αρχική</a> > </li>
            <li><a href="student.html">Φοιτητές</a> > </li>
            <li>Δήλωση Συγγραμμάτων</li>
          </ul>
        </div>
          <p>Τρέχον Εξάμηνο: <script type="text/JavaScript">
          var date = new Date();
          var month = date.getMonth();

          if ((month > 9) || (month < 2)) {
            document.write('Χειμερινό Εξάμηνο');
            }
          else {
            document.write('Εαρινό Εξάμηνο');
            }
          </script></p>
          <div class="student_forms" onload="document.selected.disabled=true" >
          <form name="formchecked" class="selectInst" action="selectInst.inc.php" method="post">
            <select class="institutes" name="selInstitute">
              <option selected="selected">Επιλέξτε Πανεπιστήμιο/ΤΕΙ</option>
              <option value="ΕΚΠΑ" onclick="document.selected.disabled=false">  Εθνικό Καποδιστριακό Πανεπιστήμιο</option>
              <option value="ΕΜΠ" onclick="document.selected.disabled=false">  Εθνικό Μετσόβιο Πολυτεχνείο</option>
              <option value="ΠΑΔΑ" onclick="document.selected.disabled=false">  Πανεπιστήμιο Δυτικής Αττικής</option>
              <option value="ΠΑΠΙ" onclick="document.selected.disabled=false">  Πανεπιστήμιο Πειραιἀ</option>
              <option value="ΧΠ" onclick="document.selected.disabled=false">  Χαροκόπειο Πανεπιστήμιο</option>
            </select>
          </form>
          <form class="selectInst" action="selectDep.inc.php" method="post" name="selected">
            <select class="institutes" name="selected" disabled="">
              <option selected="selected">Επιλέξτε Τμήμα</option>
              <option value="ΕΚΠΑ"> Επιλογή 1</option>
              <option value="ΕΜΠ">  Επιλογή 2</option>
              <option value="ΠΑΔΑ">  Επιλογή 3</option>
              <option value="ΠΑΠΙ">  Επιλογή 4</option>
              <option value="ΧΠ">  Επιλογή 5</option>
            </select>
          </form>
          </div>
          <table>
            <input class="submit-student1" type="submit" name="submit-student" value="Συνέχεια">
            <tbody>
              <ul>

              <li class="semesters"><script type="text/JavaScript">
              var date = new Date();
              var month = date.getMonth();

              if ((month > 9) || (month < 2)) {
                document.write('1ο Εξάμηνο');
                }
              else {
                document.write('2ο Εξάμηνο');
                }
              </script><ol>
                <li>Μάθημα 1<form class="" action=" " ><p><input type="radio" name="radSuit" value="choice1"> Βιβλίο 1 </p>
                  <p><input type="radio" name="radSuit" value="choice2"> Βιβλίο 2 </p>
                  <p><input type="radio" name="radSuit" value="choice3"> Βιβλίο 3 </p>
                </form></li>
                <li>Μάθημα 2</li>
                <li>Μάθημα 3</li>
              </ol></li>
                <li class="semesters"><script type="text/JavaScript">
                var date = new Date();
                var month = date.getMonth();

                if ((month > 9) || (month < 2)) {
                  document.write('3ο Εξάμηνο');
                  }
                else {
                  document.write('4ο Εξάμηνο');
                  }
                </script><ol>
                  <li>Μάθημα 1</li>
                  <li>Μάθημα 2</li>
                  <li>Μάθημα 3</li>
                </ol></li>
                <li class="semesters"><script type="text/JavaScript">
                var date = new Date();
                var month = date.getMonth();

                if ((month > 9) || (month < 2)) {
                  document.write('5ο Εξάμηνο');
                  }
                else {
                  document.write('6ο Εξάμηνο');
                  }
                </script>
                      <ol>
                        <li>Μάθημα 1</li>
                        <li>Μάθημα 2</li>
                        <li>Μάθημα 3</li>
                      </ol>
                </li>
                <li class="semesters"><script type="text/JavaScript">
                var date = new Date();
                var month = date.getMonth();

                if ((month > 9) || (month < 2)) {
                  document.write('7ο Εξάμηνο');
                  }
                else {
                  document.write('8ο Εξάμηνο');
                  }
                </script><ol>
                  <li><button class="accordion">Μάθημα 1</button>
                    <div class="panel">
                      <form class="" action=" " >
                        <p><input type="radio" name="radSuit" value="choice1"> Βιβλίο 1 </p>
                        <p><input type="radio" name="radSuit" value="choice2"> Βιβλίο 2 </p>
                        <p><input type="radio" name="radSuit" value="choice3"> Βιβλίο 3 </p>
                      </form>
                    </div></li>
                  <li><button class="accordion">Μάθημα 2</button>
                    <div class="panel">
                      <form class="" action=" " >
                        <p><input type="radio" name="radSuit" value="choice1"> Βιβλίο 1 </p>
                        <p><input type="radio" name="radSuit" value="choice2"> Βιβλίο 2 </p>
                        <p><input type="radio" name="radSuit" value="choice3"> Βιβλίο 3 </p>
                      </form>
                    </div></li>
                  <li><button class="accordion">Μάθημα 3</button>
                    <div class="panel">
                      <form class="" action=" " >
                        <p><input type="radio" name="radSuit" value="choice1"> Βιβλίο 1 </p>
                        <p><input type="radio" name="radSuit" value="choice2"> Βιβλίο 2 </p>
                        <p><input type="radio" name="radSuit" value="choice3"> Βιβλίο 3 </p>
                      </form>
                    </div></li>
                </ol></li>
                </ul>
            </tbody></table>
      <form>
      </div>
      </main>
      <script>
      var acc = document.getElementsByClassName("accordion");
      var i;

      for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var panel = this.nextElementSibling;
          if (panel.style.maxHeight){
            panel.style.maxHeight = null;
          } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
          }
        });
      }
      </script>
    <<?php require "../footer.php" ?>
