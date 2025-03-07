     <html>
   <body>
 <form method="post" action="#">
       Select Languages:         
    <input type="checkbox"  name="c1[]"  value="PHP"
       <?php  if(isset($_POST['c1[]'])&&
          in_array('PHP',$_POST['c1'])) echo("checked");?>>PHP<br>

            <input type="checkbox"  name="c1[]"  value="CPP"
       <?php  if(isset($_POST['c1[]'])&&
       in_array('CPP',$_POST['c1'])) echo("checked");?>>CPP<br>

            <input type="checkbox"  name="c1[]"  value="JAVA"
       <?php  if(isset($_POST['c1[]'])&&
         in_array('JAVA',$_POST['c1'])) echo("checked");?>>JAVA<br>

            <input type="checkbox"  name="c1[]"  value="DBMS"
       <?php  if(isset($_POST['c1[]'])&&
          in_array('DBMS',$_POST['c1'])) echo("checked");?>>DBMS<br>
             <input type="submit" value="ok"> 
   </form>
  </body>
</html>
<?php 
     $s1=$_POST["c1"];
      print_r($s1);
     
?>
  
