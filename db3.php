<html>
 <body>
   <form method="post" action="#">
    Enter roll no to update name:
    <input type="text" name="t1"><br>
    Enter name:
    <input type="text" name="t2"><br>
     Enter per:
    <input type="text" name="t3"><br>
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
    $p=$_POST["t3"];

   $k=mysqli_query($con,"insert into student values('$no','$nm','$p')");
   if($k==true)
    echo("record  inserted...");

  mysqli_close($con);

 ?>