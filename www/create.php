<?php

require_once("..//db_config.php");


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Gebruiker maken</title>
  </head>
  <body>


    <form action="create.php" method="post">
      <input class="form-control col-sm-12" placeholder="Naam" type="text" name="naam"> <br />
      <input class="form-control col-sm-12" placeholder="Email" type="email" name="email"> <br />
      <input class="form-control col-sm-12" placeholder="wachtwoord" type="text" name="wachtwoord"> <br />
      <input class="btn btn-dark col-sm-12" type = "submit" name = "submit" value ="Submit">
    </form>
  </body>
</html>





<?php

if(isset($_POST['submit'])){

$gebruiker = $_POST['naam'];
$email = $_POST['email'];
$password = $_POST['wachtwoord'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

echo $hashed_password;
$query = "INSERT INTO gebruikers (id,naam, email, wachtwoord, valid)
VALUES ('NULL', '$gebruiker', '$email', '$hashed_password','NULL')";

if($db_connection->exec($query)){
  echo "Succes";
}else {
  echo "no succes";
}
}else {
  echo "Failed to submit";
}


 ?>
