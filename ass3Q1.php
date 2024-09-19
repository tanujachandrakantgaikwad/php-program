<?php
 $var=array("1"=>"34","2"=>"45","3"=>"76");
    print_r($var);
 $t=array_search(45,$var);
  if($t==false)
   echo("not found");
  else
   echo("<br> element found position=".$t);
?>
