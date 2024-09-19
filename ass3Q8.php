<?php
 
 $s1="Tanuja";
  $s2="Rutuja";

//a)Upper case and Lower case

 $t=strtoupper($s1);
  echo("<br><br> Upper case string=".$t);

   $t=strtolower($s2);
  echo("<br><br> lower case string=".$t);

//b) first and last occurrence
   $s1="cdj college";

    $a=strpos($s1,"college");

    if($a==false)
     echo("not found");
   else
     echo("<br><br> found =".$a);

?>