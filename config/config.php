<?php
$connection = new PDO("mysql:host=localhost;dbname=book_mytrip", "root", "");

if (!$connection) {
  echo " unable connect to data base";
}
  
?>