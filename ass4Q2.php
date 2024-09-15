<?php
  function power($x,$y)
   {
     $t=1;
   for($i=1;$i<=$y;$i++)
     {
       $t=$t*$i;
     }
   echo("<br> power of x=".$t);
  }
  power(3,4);
?>