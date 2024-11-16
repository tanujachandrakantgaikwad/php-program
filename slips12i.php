<?php
 session_start();
 $n=$_POST["t1"];
  $add=$_POST["t2"];
  $pno=$_POST["t3"];
 
   $_SESSION["name"]=$n;
   $_SESSION["address"]=$add;
  $_SESSION["phoneno"]=$pno;
?>
<html>
 <form method="post" action="slips12ii.php">
  <h1> PRODUCT INFO</h1>
   Enter Pname:
   <input type="text" name="t1"><br>
    Enter qty:
   <input type="text" name="t2"><br>
     Enter rate:
   <input type="text" name="t3"><br>
     <input type="submit" value="Next"><br>
</form>
</html>