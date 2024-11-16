<html>
  <form method="post" action="#">
   Enter email id:
   <input type="email" name="t1"><br>
  <input type="submit">
 </form>
</html>
<?php
 $e=$_POST["t1"];
 $p="/^[a-z A-Z]+[0-9]+\@[a-z]+\.(com)/";
 echo("Email=$e<br>");
 if(preg_match($p,$e))
   echo("valid email");
else
  echo("invalid email");
?>