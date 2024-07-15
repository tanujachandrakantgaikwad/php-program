 5.Write a PHP Script which will perform the Addition, Subtraction, Multiplication, and 
Division of two numbers as per the choice. (Use Switch Case)  

<html>
 <body>
   <form method="post" action="#">
     Enter no1=
       <input type="number" name="t1"><br>
    Enter no2=
       <input type="number" name="t2"><br>

    <input type="submit" value="ok"> <br>
</body>
</html>
<?php
 $n1=$_POST["t1"];
 $n2=$_POST["t2"];
  $a=$n1+$n2;
  $b=$n1-$n2;
  $c=$n1*$n2;
  $d=$n1/$n2;
 echo("<br>Addition=".$a);
 echo("<br>sub=".$b);
 echo("<br>mul=".$c);
 echo("<br>division=".$d);

?>