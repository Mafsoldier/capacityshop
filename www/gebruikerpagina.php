<?php
require_once("header.php");
require_once("..//db_config.php");

if (isset($_SESSION['loggedin'])) {

    echo "You are loggedin already";

  }else {

    if (isset($_POST['submit'])){
    echo "login succeed.";
    $_SESSION['loggedin'] = true;

  }else {
    echo "Please login";
  }
}






 ?>
