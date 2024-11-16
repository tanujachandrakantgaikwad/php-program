Consider the following entities and their relationships  
student (sno integer, s_name char(30), s_class char(10), s_addr char(50)), 
teacher (tno integer, t_name char (20), qualification char (15),experience integer).  
The relationship between student-teacher: m-m with descriptive attribute subject. 
Using above database write a script in PHP to accept a teacher name from user and
display the names of students along with subjects to whom teacher is teaching. 

<html>
  <form method="post" action="#">
    Enter Teacher name:
  <input type="text" name="t1"><br>
  <input type="submit">
 </form>
</html>
<?php
 $con=mysqli_connect("localhost","root","");
  if($con==false)
   die("error in connection");
 mysqli_query($con,'use cdj');
  $tn=$_POST["t1"];
 $k=mysqli_query($con,"select sname,sub from stud1,teacher,st
 where stud1.sno=st.sno
 and teacher.tno=st.tno
 and tname='ram'");
while($row=mysqli_fetch_array($k))
 {
   echo("<br>student name=".$row[0]);
    echo("<br>student subject=".$row[1]);

 
}


 mysqli_close($con); 

?>