<html>
  <body>
    <form method="post" action="#">
     enter large string:
   <input type="text" name="t1"><br>
    enter small string:
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

if(preg_match("/^$s1/",$s2))
   echo("<br> string found");
 else 
   echo("not found");

 $s=preg_replace("/$s1/",$s2,$s3);
  echo("<br> replace=".$s);

$s=preg_split("/ /",$s2);
  echo("<br>split string");
 print_r($s);


?>