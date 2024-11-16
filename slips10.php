<html>
 <form method="post" action="#">
  enter name:
<input type="text" name="t1"><br>
enter mobile no:
 <input type="text" name="t2"><br>
select course:
 <select name="t3">
  <option value="BBACA">BBACA</option>
   <option value="BBA">BBA</option>
   <option value="B.Com">B.Com</option>

</select><br>
<input type="submit">
</form>
</html>
<?php
  $n=$_POST["t1"];
 $m=$_POST["t2"];
 $c=$_POST["t3"];
  if(!preg_match("/^[A-Z a-z]$/",$n))
         echo("<br> vaild Name=".$n);
     else
        echo("<br> invalid name");
   if(strlen($m)==10)
          echo("<br> mobile no is valid=".$m);
  else 
    echo("<br>invalid");
   echo("<br> Course=".$c);
   
  
?>