
<?php
  $con=mysqli_connect("localhost","root","");
   if($con==false)
    die("error in connection");
  mysqli_query($con,"use cdj");

  mysqli_query($con,"create table employee(eno int primary key,ename varchar(20),add varchar(20),join_date date,salary float)");
  echo("record insert....");
 mysqli_close($con);


?>