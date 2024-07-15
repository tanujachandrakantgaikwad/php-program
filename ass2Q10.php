
10. Write a PHP Script to display Armstrong 
numbers between 1 to 500. 


<?php
 for($n1=1;$n1<500;$n1++) 
 {
    $s=0; 
  $n=$n1;
 while((int)$n>0)
  {
   $d=$n%10;
   $s=$s+($d*$d*$d);
   $n=(int)$n/10;

  }
 if($s==$n1)
echo("<br> armstorng no=".$s);
}
?>