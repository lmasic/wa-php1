<?php  //send.php
require "db.php";
if (isset($_POST["jm"]))
  { // print_r($_POST);
  
    //TODO: o�et�it mysql injection
   
    $mysqli -> query("insert into form set jm='".$_POST["jm"]."',zprava='".$_POST["zprava"]."'");

    
   } 
    
    
    header("Location: http://lm/?id=kontakt&x=ok");
?>