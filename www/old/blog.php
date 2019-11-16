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
?>


<div class="container">


    <table class='table'>
    <tbody>

      <?php
       foreach ($bloggen as $blog) {
      ?>

      <tr>
      <td><?php echo $blog['titel'];   ?></td>
     
      </tr>
      <TR>
      <td><?php echo $blog['blogtekst'] ?></td> 
      </TR>

    <?php
    }
    ?>
    
    </tbody>


    </table>


</div>









<!-- FOOTER -->
 <?php

require_once("footer.php");


  ?>
