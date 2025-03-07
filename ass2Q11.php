<html>
   <body>
     <form method="post" action="#">
         Enter client name:
           <input type="text"  name="t1" ><br>
        Property Details:
       <select name="s1[]">
      <option>Flat</option>
      <option>Bunglow</option><br>
      <option>Plot</option>
   </select><br>
  <input type="submit">
</form>
</body>
</html>
<?php
   $n=$_POST["t1"];
   $p=$_POST["s1"];
    echo("Client name=".$n);
  foreach($p as $a)
  {
      echo("<br>property=".$a);
 }
?>