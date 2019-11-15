<?php

require_once("header.php")

 ?>


 <div class="container-fluid" align="center">
   <h1>CONTACT</h1>
 </div>


<div class="container-fluid contactform">
  <div class="row">
    <div class="col-sm-4">

    </div>
    <div class="col-sm-4">

      <h3 align="center">Neem contact met mij op</h3>

      <form action="contactverzonden.php" method="post">
        <input class="form-control col-sm-12" placeholder="Naam" type="text" name="naam"> <br />
        <input class="form-control col-sm-12" placeholder="Email" type="email" name="email"> <br />
        <input class="form-control col-sm-12" placeholder="Telefoonnummer" type="text" name="telefoon" min="10" max="10"> <br />
        <input class="btn btn-dark col-sm-12" type = "submit" name = "submit" value = "Submit">
      </form>

    </div>
    <div class="col-sm-4">

    </div>
  </div>
</div>






 <?php

require_once("footer.php");


  ?>
