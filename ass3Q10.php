<?php
  $s1="Tanuja gaikwad";
   $s2="rutuja";
  $s3="gaikwad";

  $s4=str_replace($s3,$s2,$s1);

   echo("replace string=".$s4);
 

//b) reverse string
 $a=strrev($s1);
  echo("<br><br>Reverse string=".$a);

?>