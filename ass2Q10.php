<html>
   <body>
     <form method="post" action="<?php echo($_SERVER['PHP_SELF']);?>">
         Enter Indian currency in rs:
           <input type="text"  name="t1"><br>
          <input type="radio" name="r1" value="dollar">dollar<br>
           <input type="radio" name="r1" value="pound">pound<br>
       <input type="submit" value="ok"> 
   </form>
  </body>
</html>
<?php 
     $rs=$_POST['t1'];
     $dp=$_POST['r1'];
       if($dp=="dollar")
           echo("<br> rs in dollar=".$rs/86);
       else
           echo("<br> rs in pound=".$rs/104);
?>
  
