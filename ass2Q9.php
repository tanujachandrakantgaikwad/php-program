<html>
   <body>
     <form method="post" action="#">
         Enter string1:
           <input type="text"  name="t1" value="<?php  echo($_POST['t1']);?>"><br>
       Enter string2:
          <input type="text" name="t2" value="<?php  echo($_POST['t2']);?>"><br>
       <input type="submit" value="ok"> 
   </form>
  </body>
</html>
<?php 
     $s1=$_POST["t1"];
     $s2=$_POST["t2"];
       if($s1==$s2)
           echo("<br> string are same");
       else
           echo("<br> string are not same");
?>
  
