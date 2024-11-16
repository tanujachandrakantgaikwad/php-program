<html>
  <body>
    <form method="post" action="#">
     enter large string:
   <input type="text" name="t1"><br>
    entersmall string:
   <input type="text" name="t2"><br>
    enter replace string:
   <input type="text" name="t3"><br>
  <input type="submit">
   </form>
 </body>
</html>
<?php
  $s1=$_POST["t1"];
  $s2=$_POST["t2"];
  $s3=$_POST["t3"];

 $k=strpos($s1,$s2);
  if($k==false)
  echo("<br> not found");
 else if($k==0)
  echo("<br> found starting");
else
  echo("<br> found middle or last");

$c=substr_count($s1,$s2);
  echo("<br> string count=".$c);

$s=str_replace($s2,$s3,$s1);
 echo("<br> replace string=".$s);
?>