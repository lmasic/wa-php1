<?php
if (isset($_GET["id"])) $id=$_GET["id"];else $id=0;  
 require "header.php" ?>
<main>
<?php

    switch ($id) {
    
    case "clanek": include "clanek.php";break;
    
    case "kontakt": include "kontakt.php";break;
        
    default: echo "<h1>Úvod.</h1>";
    
    }


?>

</main>
<?php require "footer.php" ?>