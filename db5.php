 <?php

   $con=mysqli_connect("localhost","root","");
    if($con==false)
      die("error in connection");

     mysqli_query($con,"use cdj");
    
   $res=mysqli_query($con,"select * from student");
    while($row=mysqli_fetch_array($res))
     {
       echo("<br> Roll no=".$row[0]);
       echo("<br> Name=".$row[1]);
      echo("<br> per=".$row[2]);
      echo("<br>");  
   }
   mysqli_close($con);

 ?>