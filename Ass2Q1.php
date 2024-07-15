1. Write a PHP Script to display a maximum of two numbers. 
<html>
 <body>
   <form method="post" action="#">
     enter first no=
       <input type="number" name="t1"><br>
    enter second no=
      <input type="number" name="t2"><br>
    <input type="submit" value="ok"> <br>
</body>
</html>
<?php
 $n1=$_POST["t1"];
 $n2=$_POST["t2"];
   if($n1>$n2)
      echo("first number is maximum");
    else
      echo("second number is maximum");


?>