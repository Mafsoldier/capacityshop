<?php

require_once("header.php");
require_once("..//db_config.php");


if (isset($_SESSION['loggedin'])) {


  echo "<script>location.href='gebruikerpagina.php';</script>";


  }else {

    if (isset($_POST['submit'])){

      $loginName = $_POST['naam'];
      $wachtWoord = $_POST['wachtwoord'];

// check of wachtwoord overeenkomt met wachtwoord uit de database.
// ook moet het wachtwoord nog encrypt worden met salt.
      if () {



      }
    echo "login succeed.";
    $_SESSION['loggedin'] = true;
    echo "<script>location.href='gebruikerpagina.php';</script>";

  }else { ?>


    <div class="container" style="padding-top: 50px">
      <form action="login.php" method="post">
        <input class="form-control col-sm-12" placeholder="Inlog naam" type="text" name="naam"> <br />
        <input class="form-control col-sm-12" placeholder="Wachtwoord" type="password" name="wachtwoord"> <br />
        <input class="btn btn-dark col-sm-12" type = "submit" name = "submit" value = "Submit">
      </form>
     </form>
    </div>

<?php

  }
 }

?>
