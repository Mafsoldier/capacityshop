<?php


require_once("..//db_config.php");

$query = "INSERT INTO gebruikers (id,naam, email, wachtwoord)
VALUES ('NULL', 'John', 'Doe@doe.nl', 'vetjes')";

if($db_connection->exec($query)){
  echo "Succes";
}else {
  echo "no succes";
}



 ?>
