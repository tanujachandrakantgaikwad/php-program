 4.Write a PHP Script to check whether a year is a leap or not.

<html>
 <body>
   <form method="post" action="#">
     Enter year=
       <input type="number" name="t1"><br>
    <input type="submit" value="ok"> <br>
</body>
</html>
<?php
 $y=$_POST["t1"];
 if($y%4==0)
   echo("leap year");
 else
  echo("not leap year");  
?>