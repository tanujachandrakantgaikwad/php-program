<?php
  session_start();
 $u=$_SESSION["uname"];
 $p=$_SESSION["password"];      
  $n=$_POST["t1"];
  $c=$_POST["t2"];
 $pno=$_POST["t3"];

 
  echo("<br> Username=".$u);
 echo("<br> Password=".$p);
 
 echo("<br><h1>USER DETAIL</h1>");
 echo("<br> Name=".$n);
echo("<br> City=".$c);
echo("<br> pnone no=".$pno);
?>