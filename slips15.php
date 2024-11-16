<html>
 <body>
 <form method="post" action="#">
  <h1> select items</h1>
<input type="checkbox" name="c1">oil kg:120
<input type="text" placeholder="enter quality" name="t1"><br>
 
<input type="checkbox" name="c2">sugar kg:20
<input type="text" placeholder="enter quality" name="t2"><br>

<input type="checkbox" name="c3">rice kg:110
<input type="text" placeholder="enter quality" name="t3"><br>

<input type="checkbox" name="c4">soap kg:40
<input type="text" placeholder="enter quality" name="t4"><br>

<input type="submit">
</form>
</body>
</html>
<?php
 echo("<br><h1> BILL</h1>");
 $t=0; 
if(isset($_POST["c1"]))
  {
     $q=$_POST["t1"];
   echo("<br> oil Kg:$q …...total=".$q*120);
   $t=$t+($q*120);  
 }
if(isset($_POST["c2"]))
  {
    $q=$_POST["t2"];
   echo("<br> sugar Kg:$q....total=".$q*20);
  $t=$t+($q*20);
   }
if(isset($_POST["c3"]))
  {
    $q=$_POST["t3"];
   echo("<br>rice Kg:$q....total=".$q*110);
  $t=$t+($q*110);
   }
if(isset($_POST["c4"]))
  {
    $q=$_POST["t4"];
   echo("<br> soapKg:$q....total=".$q*40);
  $t=$t+($q*40);
   }
echo("<br> Total Bill=".$t);
?>
