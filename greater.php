<?php
 $n1=$_POST["t1"];
 $n2=$_POST["t2"];
 $n3=$_POST["t3"];

 if($n1>$n2 && $n1>$n3)
   printf("greater number=%d",$n1);
 
  else if($n2>$n1 && $n2>$n3)
   printf("greater number=%d",$n2);

 else
   printf("greater number=%d",$n3);

  

?>