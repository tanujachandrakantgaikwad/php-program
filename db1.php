<?php
 $con=mysqli_connect("localhost","root","");
 if($con==false)
  die("error in connection");

  mysqli_select_db($con,"cdj");

   $k=mysqli_query($con,"insert into student values(3,'ram',87)");
   if($k==true)
    echo("record inserted...");

  mysqli_close($con);

 ?>