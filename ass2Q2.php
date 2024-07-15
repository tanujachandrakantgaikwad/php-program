 2. Write a PHP Script to check whether a number is positive or negative. 
<html>
 <body>
   <form method="post" action="#">
     enter no=
       <input type="number" name="t1"><br>
    <input type="submit" value="ok"> <br>
</body>
</html>
<?php
 $n1=$_POST["t1"];
   if($n1>0)
      echo(" number is positive ");
    else
      echo("number is negative ");
?>