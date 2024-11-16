<?php
 session_start();
  $n=$_SESSION["name"];
  $add=$_SESSION["address"];
  $pno=$_SESSION["phoneno"];
 
    $pn=$_POST["t1"];
    $q=$_POST["t2"];
    $r=$_POST["t3"];

 echo("<br> <h1>BILL</h1>");
  echo("<br> customer name=".$n);
   echo("<br> customer address=".$add);
   echo("<br> customer phone no=".$pno);
   echo("<br> product name=".$pn);
   echo("<br> product Qty=".$q);
  echo("<br>Rate=".$r);
  echo("<br>Total Bill=".$r*$q);
 
?>