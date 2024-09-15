<html>
  <body>
    <form method="post" action="#">
      enter owner address:
      <input type="text" name="t1"><br>
      <input type="submit">
    </form>
   </body>
</html>
<?php
  $con=mysqli_connect("localhost","root","");

   if($con==false)
    die("error in connection");

  mysqli_query($con,"use cdj");

    $add=$_POST["t1"];

  $res=mysqli_query($con,"select property.* from owner1,property
  where owner1.oname=property.oname
  and address='$add'");

  while($row=mysqli_fetch_array($res))
{
  echo("<br> property no=".$row[0]);
  echo("<br> description=".$row[1]);
  echo("<br> area=".$row[2]);
  echo("<br>oname=".$row[3]);
  echo("<br>");


} 
 
mysqli_close($con);


?>