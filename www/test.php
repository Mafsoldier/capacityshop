<?php

require_once("..//db_config.php");


  $loginName = "test";
  $wachtWoord = "test";


$sql = 'SELECT naam ,wachtwoord, valid FROM gebruikers ORDER BY wachtwoord';
foreach ($db_connection->query($sql) as $row) {
  if ($row['naam'] === 'test') {

    if (($row['wachtwoord'] === 'test') && ($row['valid'] === 'valid')) {

      echo "allowed!";
    }else {
      echo "Not allowed";
    }


  }else {
    echo "Sorry we don't know who you are...yet ;)";
  }




     ?>
