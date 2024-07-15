/*6. Write a PHP Script to display the grade of the student according to percentage. Use the 
following conditions:   
Percentage <40  => Grade=”Fail” 
Percentage >= 40 and Percentage <=50  => Grade= “Pass Class” 
Percentage >=50 and Percentage <=60  => Grade= “Higher Second Class” 
Percentage >60 and Percentage <=70  => Grade= “First Class” 
Percentage >70 => Grade= “First Class with Distinction”*/


<html>
 <body><br><br>
   <form method="post" action="#">
     Enter per=
       <input type="number" name="t1"><br>
   
    <input type="submit" value="ok"> <br>
</body>
</html>
<?php
 $p=$_POST["t1"];
 if($p<=40)
    echo("Fail=".$p);
  else if($p>=50)
    echo("pass class=".$p);
 else if($p>=60)
    echo("higher second class=".$p);
 else  if($p>=70)
    echo("first class=".$p);
 else
  echo("Distinction=".$p);

?>
