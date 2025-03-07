     <html>
   <body>
 <form method="post" action="#">
   Enter student name:
   <input type="text" name="t1"><br>
Enter Gender:
   <input type="radio" name="r1" value="female">Female<br>
 <input type="radio" name="r1" value="male">Male<br>
       <h1>Select Qualification:</h1> <br>        
    <input type="checkbox"  name="c1[]"  value="SSC"
       <?php  if(isset($_POST['c1[]'])&&
          in_array('SSC',$_POST['c1'])) echo("checked");?>>SSC<br>

            <input type="checkbox"  name="c1[]"  value="HSC"
       <?php  if(isset($_POST['c1[]'])&&
       in_array('HSC',$_POST['c1'])) echo("checked");?>>HSC<br>

            <input type="checkbox"  name="c1[]"  value="BCA"
       <?php  if(isset($_POST['c1[]'])&&
         in_array('BCA',$_POST['c1'])) echo("checked");?>>BCA<br>

            <input type="checkbox"  name="c1[]"  value="MCA"
       <?php  if(isset($_POST['c1[]'])&&
          in_array('MCA',$_POST['c1'])) echo("checked");?>>MCA<br>
             <input type="submit" value="ok"> <br>
   </form>
  </body>
</html>
<?php 
     $n=$_POST["t1"];
     $g=$_POST["r1"];
     $s1=$_POST["c1"];
       echo("Name=".$n);
       echo("<br>Gender=".$g);
       echo("<br>");
      print_r($s1);
     
?>
  
