<?php
  $var=array(4,2,5);
  $var1=array(3,5,4);
  echo("<br> union array");
   $t=array_merge($var,$var1);
  print_r($t);


 echo("<br> traverse array element:");
 
  shuffle($var);
   foreach($var as $n)
   {
     echo("<br> $n");
   }
?>