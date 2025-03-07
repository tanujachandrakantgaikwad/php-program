<html>
   <body>
     <form method="post" action="#">
         Enter student id:
           <input type="text"  name="t1" value="<?php  echo($_POST['t1']);?>"><br>
 Enter name:
          <input type="text" name="t2" value="<?php  echo($_POST['t2']);?>"><br>
     Enter address:
          <input type="text" name="t3" value="<?php  echo($_POST['t3']);?>"><br>
    Enter mobile no:
          <input type="text" name="t4" value="<?php  echo($_POST['t4']);?>"><br>
    Enter per:
          <input type="text" name="t5" value="<?php  echo($_POST['t5']);?>"><br>

             <input type="submit" value="ok"> 
   </form>
  </body>
</html>
<?php 
     $s1=$_POST["t1"];
     $s2=$_POST["t2"];
     $s3=$_POST["t3"];
    $s4=$_POST["t4"];
    $s5=$_POST["t5"];

      ?>
  
