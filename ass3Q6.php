<?php
//a  display multidimensional array:

 $s=array(array("swift",23,67),
          array("dezire",34,87),
          array("scoda",12,15));
 print_r($s);

//b) search element  from multidimensional array
 
$var=array(10,29,38,46);
$a=array_search(38,$var);
 if($a==false)
    echo("<br> not found");
else
    echo("<br><br>number found position=".$a);

?>