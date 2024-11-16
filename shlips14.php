Consider the following entities and their relationships  
Movie (movie_no, movie_name, release_year)  
Actor (actor_no, name)  

Relationship between movie and actor is many – many with attribute rate in Rs.  
Create a RDB in 3NF for the above and solve following Using above database,  
write PHP scripts for the following:(Hint: Create HTML form having three radio 
buttons)  
a) Accept actor name and display the names of the movies in which he has acted.  
b) Insert new movie information.  
c) Update the release year of a movie. (Accept the movie name from user) 
<html>
  <form method="post" action="#">
  Enter actor name:
  <input type="text" name="t1"><br>
 Enter movie name:
<input type="text" name="t2"><br>
 <input type="radio" name="t3" value="a">display movie name<br>
<input type="radio" name="t3" value="b"> insert info<br>
<input type="radio" name="t3" value="c">update <br>
<input type="submit">
</form>
</html>

<?php
  $con=mysqli_connect("localhost","root","");
  if($con==false)
    die("error in connection");
    mysqli_query($con,'use cdj');
   $an=$_POST["t1"];
  $mon=$_POST["t2"];
  $ch=$_POST["t3"];
 switch($ch)
{
  case "a":$k=mysqli_query($con,"select  mname from movie,actor,ma
                           where movie.mno=ma.mno
                             and actor.ano=ma.ano
                            and aname='$an'");
                            while($row=mysqli_fetch_array($k))
                             {
                                    echo("<br> movie name=".$row[0]);                
                            }
                            break;
 case "b":mysqli_query($con,"insert into movie value(4,'gadar',2024)");
                   break;

 case "c": mysqli_query($con,"update  movie set rel_year='2012'
                                                  where mname='$mon'");
                     break;
}
mysqli_close($con);
 ?>  