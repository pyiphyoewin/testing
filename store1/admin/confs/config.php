<?php
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "store1";

  $conn = mysql_connect($dbhost, $dbuser, $dbpass);
  mysql_select_db($dbname, $conn);
?>

