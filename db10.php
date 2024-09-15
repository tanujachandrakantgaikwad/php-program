<html>
 <body>
   <form method="post" action="#">
    Enter competition name:
    <input type="text" name="t1"><br>
       <input type="submit"><br>
   </from>
 </body>
</html>
<?php
 $con=mysqli_connect("localhost","root","");
   if($con==false)
    die("error in connection");
  mysqli_query($con,"use cdj");
  
  $c_name=$_POST["t1"];
$res=mysqli_query($con,"select student .*from student ,competition,sc
where student.rno=sc.rno
and competition.c_no=sc.c_no
and rank=1
and cname='$c_name'");
 
 while($row=mysqli_fetch_array($res))
{
  echo("<br> student rno=".$row[0]);
  echo("<br> student name=".$row[1]);
  echo("<br> student per=".$row[2]);
}
 mysqli_close($con);

?>