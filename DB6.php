 <?php

   $con=mysqli_connect("localhost","root","");
    if($con==false)
      die("error in connection");
else
print("successssssssssssssssssssssssssssssssssss");


     mysqli_query($con,"use cdj");
       
   $res=mysqli_query($con,"select * from student");
     echo("<table border='1'>");
     echo("<tr>");
     echo("<th> Roll no</th>");
     echo("<th>Name</th>");
     echo("<th>per</th>");
     echo("</tr>");

    while($row=mysqli_fetch_array($res))
     {
       echo("<tr>");
       echo("<td> $row[0] </td>");
       echo("<td> $row[1] </td>");
       echo("<td> $row[2] </td>");
       echo("</tr>");  
   }
 echo("</table>");
   mysqli_close($con);

 ?>