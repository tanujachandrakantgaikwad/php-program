Considerer the following entities and their relationships  
Student (Stud_id,name,class)  
Competition (c_no,c_name,type)  
Relationship between student and competition is many-many with attribute rank and 
year. Create a RDB in 3NF for the above and solve the following. Using above 
database write a script in PHP to accept a competition name from user and display 
information of student who has secured 1st rank in that competition. 

<html>
  <form method="post" action="#">
    Enter Cname:
    <input type="text" name="t1"><br>
  <input type="submit">
 </form>
</html>

<?php
  $con=mysqli_connect("localhost","root","");
  if($con==false)
   die("error in connection");
  mysqli_query($con,'use cdj');
  $cn=$_POST["t1"];
  $k=mysqli_query($con,"select  student.* from student,competition,sc
    where student.rno=sc.rno
   and competition.c_no=sc.c_no
   and cname='$cn' and rank=1");
   while($row=mysqli_fetch_array($k))
      {
         echo("<br> roll no=".$row[0]);
        echo("<br> student name=".$row[1]);
       echo("<br> per=".$row[2]);

   }
mysqli_close($con);

?>