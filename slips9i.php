<?php
  session_start(); 

 $u=$_POST["t1"];
 $p=$_POST["t2"];
 
$_SESSION["uname"]=$u;
$_SESSION["password"]=$p;
?>
<html>
 <form method="post" action="slips9ii.php">
   enter name:
  <input type="text" name="t1"><br>
enter city:
  <input type="text" name="t2"><br>
enter phone no:
  <input type="text" name="t3"><br>
 <input type="submit" value="Next">
</form>
</html>