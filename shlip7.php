<?php

$a=array("php"=>"45","DSA"=>"78","BD"=>"88");
 
 ksort($a);
print_r($a);

    echo("<br><br> array count=".count($a));

$t=array_slice($a,2,3);
echo("<br> <br>Delete element=");
print_r($t);

$s=array_flip($a);
echo("<br> <br>reverse array=");
 print_r($s);

shuffle($a);
echo("<br> <br>ramond order=");
print_r($a);
?>