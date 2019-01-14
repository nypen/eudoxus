<?php /* The connection to the database */

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$userTbl    = "users";

$dBName = "eudoxus";

$conn = mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

if(!$conn)  {
  die("Connection failed: " .msqli_connect_error());
}
