<?php
// array sort  
$a=array("A"=>"DS","B"=>"php","C"=>"SE","D"=>"BD");
 
//a) sort array by value

 sort($a);
   print_r($a);

echo("<br><br>");

 arsort($a);
  print_r($a);

 //b) sort array by value without change key
echo("<br><br>");

 sort($a);
  print_r($a);

//c)inserselection of two array

  $a=array(1,2,3,4);
  $b=array(2,3,5,1);
   
  echo("<br><br>");

    $c=array_intersect($a,$b);
     print_r($c);

 //d)union array
  echo("<br><br>");
   $t=array_merge($a,$b);
  print_r($t);

?>