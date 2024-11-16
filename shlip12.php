Considerer the following entities and their relationships project(pno integer, p_name 
char(30), ptype char(20),duration integer), employee (eno integer, e_name char (20), 
qualification char (15), joindate date) .The relationship between project - employee: 
M-M, with descriptive attributes as start_date (date), no_of_hours_worked (integer). 
Using above database write a script in PHP to accept a project name from user and 
display information of employees working on the project. 

<html>
  <form mrthod="post" action="#">
  enter Pname:
  <input type="text" name="t1"><br>
 <input type="submit">
</form>
</html>
<?php
 $con=mysql_connect("localhost","root"," ");
 if($con==false)
  die("erroe in connection");
 mysqli_query($con,'use cdj');
  $n=$_POST["t1"];
$k=mysqli_query($con,"select emp1.* from emp1,project1,EP1
                                        where emp1.eno=EP1.eno
                                      and project1.pno=EP1.pno
                                      and  pname='$n'");

while($row=mysqli_fetch_array($k))
  {
   echo("<br> emp no=".$row[0]);
    echo("<br> emp name=".$row[1]);
   echo("<br> emp qua=".$row[2]);
   echo("<br> emp join date=".$row[3]);
 }
mysqli_close($con);
?>