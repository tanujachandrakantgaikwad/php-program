<html>
  <form method="post" action="#">
   Enter Username:
   <input type="text" name="t1"><br>
  Enter password:
   <input type="password" name="t2"><br>
   <input type="submit" value="ok">
 </form>
</html>
<?php
    $con=mysqli_connect("localhost","root","");
    if($con==false)
    die("error in connecton");
mysqli_query($con,"cdj");

      $u=$_POST["t1"];
      $p=$_POST["t2"];
        if($u!=="" &&$p!=="")
  {
     $k=mysqli_query($con,"select * from login where uesrname=$u and pass=$p");
      echo("login  succ");    
  }
  mysqli_close($con);
    
?>