 
7. Write a PHP Script to display prime numbers between 1 to 50. 
<?php

 for($n=2;$n<50;$n++)
  {
 for($i=2;$i<$n;$i++)
 {
   if($n%$i==0)
     break;
 }

if($i==$n)
   echo("<br>prime".$n); 
 }
?>
