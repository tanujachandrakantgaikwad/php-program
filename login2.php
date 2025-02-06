<html>
  <form method="post" action="#">
    Enter user_name:
   <input type="text" name="t1"><br>
    <input type="submit" value="ok"> 
</form>
</html>
<?php
 $u=$_POST["t1"];
   if($u=="")
     echo("Enter Username");
 else if($u<3)
    echo("username is too short");
else 
   echo("Valid Username");
?>