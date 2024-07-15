9. Write a PHP Script to display the reverse
 of a number. E.g. 607 =>706 
<html>
 <body>
 <form method="post" action="#">
   Enter no:
   <input type="text" name="t1"><br>
   <input type="submit" value="ok"><br>
 </form> 
</body>
</html>
<?php
 $n=$_POST["t1"];
  $r=0;
 while((int)$n>0)
 {
   $d=$n%10;
   $r=$r*10+$d;
   $n=(int)$n/10;

 }
echo("<br> reverse no=".$r);
?>