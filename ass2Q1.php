<html>
  <body>
 <form method="post" action="<?php echo($_SERVER['PHP_SELF']);?>">
   Enter number:
   <input type="text" name="t1"><br>
 <input type="submit">
</form>
</body>
</html>
<?php
    $num = $_POST['t1'];
    if (!is_numeric($num)) 
  {
        echo ("Please enter a valid number");
    }
  else 
   {
        $onum = $num;
        $rnum = strrev($num); // Reverse the number
     if ($onum == $rnum)
      {
            echo (" number is a Palindrome=".$onum);
        }
   else  
     {
            echo ("number NOT a Palindrome=".$onum);
        }
    }

?>
