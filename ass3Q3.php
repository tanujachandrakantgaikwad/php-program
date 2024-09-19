<?php
  //a) positive or negative element

   $var=array("21","23","65");

    if($var>1)
      echo("<br> Element positive");
    else
     echo("<br> element is negative");
  
//b) average of array

$sum=Array_sum($var);
 echo("<br><br>".$sum/3);

//c) sum of array
 echo("<br><br> sum of array ele");
 $sum=Array_sum($var);
 echo("<br>".$sum);

?>