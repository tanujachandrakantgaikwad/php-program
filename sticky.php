<html>
 <body>
  <form method="get" action="<?php echo($_SERVER['PHP_SELF']);?>">
 enter no:
   <input type="text" name="t1"value="<?php         
     echo($_GET['t1']); ?>" ><br>
  enter password:
   <input type="password" name="t2"
 value="<?php  echo($_GET['t2']);?>" ><br>

  enter gender:<br>
     <input type="radio" name="r1" value="male" 
     <?php if($_GET['r1']=='male') 
      echo('checked=checked');?>>male

    <input type="radio" name="r1" value="female"
    <?php if($_GET['r1']=='female') 
      echo('checked=checked');?>>female<br>

   <input type="submit">
</form>
 </body>
</html>
 