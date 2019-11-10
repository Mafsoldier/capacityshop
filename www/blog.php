<!-- HEADER -->
<?php
require_once("header.php")
 ?>



 <div class="container-fluid" align="center">
   <h1>BLOG</h1>
 </div>



<?php

include_once("..//db_config.php");

$query = "SELECT id, titel, blogtekst FROM bloggen";


$bloggen = $db_connection->query($query);



foreach ($bloggen as $blog) {
  echo $blog[1] . "<br /> <br />";
  echo $blog[2] . "<br /> <br />";

}

 ?>
















<!-- FOOTER -->
 <?php

require_once("footer.php");


  ?>
