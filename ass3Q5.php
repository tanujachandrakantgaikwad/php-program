<?php
  $s=array("1"=>"php","2"=>"DSA","3"=>"BD","4"=>"DM");
// a)    
    echo("<br> array along with key:");
   echo("<br>");
    print_r($s);
//b)
 echo("<br>");
   $b=count($s);
   echo("<br> size of array=".$b);
 //c)
   echo("<br><br> delete  element:<br>");
  $c=array_splice($s,2,1);
     print_r($c);
//d)
echo("<br><br>reverse element:<br>");
 $d=array_reverse($s);
  print_r($d);
 
//e)
 echo("<br><br> traverse array element:");
 
  shuffle($s);
   foreach($s as $n)
   {
     echo("<br> $n");
   }
  
?>