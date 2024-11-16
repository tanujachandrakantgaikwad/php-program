Consider the following entities and their relationships Doctor (doc_no, doc_name, 
address, city, area) Hospital (hosp_no, hosp_name, hosp_city) Doctor and Hospital are 
related with many-many relationship. Create a RDB in 3 NF for the above and solve 
following Using above database, write a PHP script which accepts hospital name and 
print information about doctors visiting / working in that hospital in tabular format

<?php
  $con=mysqli_connect("localhost","root","");
  if($con==false)
   die("error in connection");
 mysqli_query($con,'use cdj');
  $k=mysqli_query($con,"select doctor.* from doctor,hos,dh
      where doctor.dno=dh.dno
       and hos.hno=dh.hno
      and hname='gaikwad'");
  while($row=mysqli_fetch_array($k))
  {
   echo("<br> doctor no=".$row[0]);
    echo("<br> doctor name=".$row[1]);
    echo("<br> doctor address=".$row[2]);
     echo("<br> doctor city=".$row[3]);
    echo("<br> doctor area=".$row[4]);
 }
mysqli_close($con);
?>