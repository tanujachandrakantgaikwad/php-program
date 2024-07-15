8. Write a PHP Script to display a perfect numbers between 1 to100.

<?php


 for($n=1;$n<100;$n++)
  {
 $s=0;
 for($i=1;$i<$n;$i++)
 {
   if($n%$i==0)
     $s=$s+$i;
 }

if($s==$n)
   echo("<br><br>perfect=".$n); 
 }
?>
