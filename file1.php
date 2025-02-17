<?php
  $f1=fopen("a.txt","r");
    if($f1==false)
      die("Error in File.."); 

  while(!feof($f1))
  {
    $s=fgets($f1);
      echo("<br>$s"); 
  }
  fclose($f1);
?>