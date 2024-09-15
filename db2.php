<html>
 <body>
   <form method="post" action="#">
    Enter roll no to update name:
    <input type="text" name="t1"><br>
    Enter name:
    <input type="text" name="t2"><br>
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
    $nm=$_POST["t2"];

   $k=mysqli_query($con,"update student set sname='$nm' where rno='$no'");
   if($k==true)
    echo("record updated...");

  mysqli_close($con);

 ?>