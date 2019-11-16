<?php
require_once("header.php")
 ?>

  <div class="container" align="center">
    <h1>CONTACT</h1>
  </div>

<div>
<?php
     if(isset($_POST['submit'])) {
       $naam = $_POST["naam"];
       $email= $_POST["email"];
       $telefoon = $_POST["telefoon"];
       ucfirst($naam);
?>
      <div class="alert alert-success center-block" role="alert">

      <p class="text-center">
<?php
      echo $naam
?>
    ik neem zo snel mogelijk contact met u op.
  </p>

  <?php }else {?>

  </div>
     <div class="alert alert-danger role="alert">
    <p class="text-center">
      Helaas er ging iets mis.
    </p>
<?php }   ?>
   </div>
</div>

<!-- Get back to main menu -->
<script>
document.addEventListener("click", function(){
 var myWindow = window.open("main.php", "_self");
 });

 <?php

 require_once("..//db_config.php");

if(isset($_POST['submit'])) {

 $query = "INSERT INTO contactaanvraag (id,naam, email, telefoon)
 VALUES ('NULL', '$naam', '$email', '$telefoon')";

$db_connection->exec($query);

}




require_once("footer.php");
  ?>
