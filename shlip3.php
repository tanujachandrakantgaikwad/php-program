<html>
 <body>
 <form method="post" action="#">
  enter No1:
 <input type="text" name="t1"><br>
enter No2:
 <input type="text" name="t2"><br>
 Select  Arithmetic  operation:
 <input type="radio" name="r1" value="addition">addition<br>
 <input type="radio" name="r1" value="sub">sub<br>
 <input type="radio" name="r1" value="mul">mul<br>
 <input type="radio" name="r1" value="divition">div<br>
 <input type="radio" name="r1" value="mod"> mod<br>
<input type="submit">
</form>
</body>
</html>
<?php
   $a=$_POST["t1"];
   $b=$_POST["t2"];
   $ch=$_POST["r1"];
if($ch=="addition")
 {xZ							`	
    $c=$a+$b;
  echo("<br> add=".$c);

  }
if($ch=="sub")
{ 
    $d=$a-$b;
  echo("<br> sub=".$d);
 }
if($ch=="mul")
{
   $e=$a*$b;
  echo("<br>mul=".$e);
 }
if($ch=="div")
 {
   $f=$a/$b;
 echo("<br> div=".$f);
 }
if($ch=="mod")
{
 $g=$a%$b;
echo("<br>mod=".$g);
 }
?>