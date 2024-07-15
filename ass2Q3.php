3. Write a PHP Script to display a Multiplication table of a number.
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
 for($i=1;$i<=10;$i++)
  echo("<br>".$n1*$i);  
 
?>