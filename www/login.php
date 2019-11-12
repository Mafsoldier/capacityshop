<?php

require_once("header.php");
require_once("..//db_config.php");


if (isset($_SESSION['loggedin'])) {

    echo "You are loggedin already";

  }else {

    if (isset($_POST['submit'])){
    echo "login succeed.";
    $_SESSION['loggedin'] = true;

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
