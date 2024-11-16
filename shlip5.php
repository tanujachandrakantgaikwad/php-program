<html>
 <body>
 <form method="post" action="#">
  item code:
 <input type="text" name="t1"><br>
 item name:
 <input type="text" name="t2"><br>
 units sold:
 <input type="text" name="t3"><br>
 rate:
 <input type="text" name="t4"><br>
<input type="submit">
</form>
</body>
</html>
<?php
$ic=$_POST["t1"];
$n=$_POST["t2"];
$us=$_POST["t3"];
$r=$_POST["t4"];
echo("<body>");
echo("<br> <table border=1>");
echo("<tr>");
 echo("<td>Item code </td>");
 echo("<td>$ic</td>");
 echo("</tr>");

echo("<tr>");
 echo("<td>Item name </td>");
 echo("<td>$n</td>");
 echo("</tr>");

echo("<tr>");
 echo("<td>Item units sold </td>");
 echo("<td>$us</td>");
echo("</tr>");

echo("<tr>");
 echo("<td>Rate</td>");
 echo("<td>$r</td>"); 
echo("</tr>");

echo("</table>");
echo("</body>");
?>
