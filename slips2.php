<html>
  <body>
    <form method="post" action="#">
     enter large string:
   <input type="text" name="t1"><br>
    entersmall string:
   <input type="text" name="t2"><br>
     <input type="submit">
   </form>
 </body>
</html>
<?php
  $s1=$_POST["t1"];
  $s2=$_POST["t2"];
 
 $k=strpos($s1,$s2);
  if($k==false)
  echo("<br> not found");
 else 
  echo("<br> found ");

$c=substr_count($s1,"college");
  echo("<br> string count=".$c);

$s=str_replace($s2,"tanu",$s1);
 echo("<br> replace string=".$s);
?>