<html>
 <body>
   <form method="post" action="#">
    Enter product no:
    <input type="text" name="t1"><br>
   Enter price:
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
  $p=$_POST["t2"];
  mysqli_query($con,"update product set price=$p where pno=$no");
  echo("record updated...");
 mysqli_close($con);


?>