<?php

 $a=array("PHP"=>"88","DSA"=>"95","BD"=>"81","DM"=>"91","SE"=>"96");
 echo("<br> ascending order=<br>");
   asort($a);
 print_r($a);
echo("<br> <br>descending order=<br>");
   krsort($a);
 print_r($a);

echo("<br> <br>sort=<br>");
 asort($a);
print_r($a);

echo("<br><br> odd element=");
function check($n)
{
  if($n%2==1)
  return true;
 else
  return false;
}
$s=array_filter($a,"check");
 print_r($s);

echo(" <br> sort");
 $s1=array_sort($a);
 print_r($s1);

 echo("<br><br> merge=");
$b=array("PHP"=>"88","web"=>"71");
$c=array_merge($a,$b);
print_r($c);

echo("<br><br> array instersection=");
 $c=array_intersect($a,$b);
 print_r($c);

echo("<br><br> set different=");
 $c=array_diff($a,$b);
 print_r($c);


?>