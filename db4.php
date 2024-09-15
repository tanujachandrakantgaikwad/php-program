<html>
 <body>
   <form method="post" action="#">
    Enter roll no to delete:
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

    $no=$_POST["t1"];
    
   $k=mysqli_query($con,"delete from student where rno='$no'");
   if($k==true)
    echo("record  delected...");

  mysqli_close($con);

 ?>