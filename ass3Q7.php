<?php
// frist string
 $s1="Tanuja";
// second string
 $s2="Gaikwad";

//a) compare two string

$k=strcmp($s1,$s2);

 if($k==0)
   echo("<br> string are same");
 else if($k<0)
   echo("<br> frist sting is greater=".$s1);
else
  echo("<br>second sting is greater=".$s2);
 
//b)Upper case

 $t=strtoupper($s1);
  echo("<br><br> Upper case string=".$t);

//c) Lower case

   $t=strtolower($s2);
  echo("<br><br> lower case string=".$t);


?>