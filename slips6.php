<html>
<form method="post" action="#">
 enter frist string:
 <input type="text" name="t1"><br>
 enter second string:
 <input type="text" name="t2"><br>
 enter position:
 <input type="text" name="t3"><br>
 <input type="radio" name="r1"  value="a">Compare the string<br>
<input type="radio" name="r1" value="b"> Append<br>
<input type="radio" name="r1" value="c">reversed<br>
<input type="submit" >
</form>
</html>
<?php
$s1=$_POST["t1"];
$s2=$_POST["t2"];
$pos=$_POST["t3"];
$ch=$_POST["r1"];

 switch($ch)
{
  case "a": if($s1==$s2)
                     echo("string are same");
                    else
                      echo("string are not same");
                     echo("<br> Using strcmp fun");
                   if(strcmp($s1==$s2))
                          echo("string are equal");
                   else if($s2==-1)
                          echo("frist string is greater");
                 else
                         echo("second string is greater");
                        break;     
case "b": 
                      $t=("$s1.$s2");
                      echo("<br> append string=".$t);
                        break;
case "c": $s=strrev($s1);
                  echo("reversed string=".$s);
                  break;
       }        
?>