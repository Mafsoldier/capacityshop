<?php

require_once("header.php");



 unset($_SESSION['loggedin']);
 session_destroy();
 header('Location: index.php');


?>























<?php

require_once("footer.php");
 ?>
