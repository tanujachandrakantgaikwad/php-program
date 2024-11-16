<html>
 <body>
 <form method="post" action="#">
  enter string:
 <input type="text" name="t1"><br>
 <input type="submit">
</form>
</body>
</html>
 <?php
   $s1=$_POST["t1"];
 $cnt=0;
   for($i=0;$i<strlen($s1);$i++)
 if($s1[$i]=='a'||$s1[$i]=='A'||$s1[$i]=='e'||$s1[$i]=='E'||$s1[$i]=='i'||$s1[$i]=='I'||$s1[$i]=='o'||$s1[$i]=='O'||$s1[$i]=='u'||$s1[$i]=='U')
 $cnt++;
 {
  echo("<br> count=".$cnt);
}
echo("<br> palindrom string=");
$s2=strrev($s1);
  if($s1==$s2)
   echo("palindrom");
 else
  echo("not palindrom");
?>