<html>
  <body>
    <form method="post" action="#">
     enter distances:
   <input type="text" name="t1"><br>
   <input type="radio" name="r1" value="a">miles<br>
     <input type="radio" name="r1" value="b">km<br>  
   <input type="submit">
   </form>
 </body>
</html>
<?php
 $d=$_POST["t1"];
 $ch=$_POST["r1"];
  
 if($ch=="a")
 {
   $t=$d/1.607;
    echo(" mlie=".$t);
 }
 if($ch=="b")
 {
   $t=$d*1.607;
    echo(" km=".$t);
 }



?>
