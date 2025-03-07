<?php
 $xml=simplexml_load_file("book.xml");
   if($xml==false)
  {
     die("file not found......erroe in file");
   }
     echo("<table border='1'>");
     echo("<tr><th>Book no");
     echo("<th>Book name"); 
     echo("<th>Book Author");
      echo("<th>Year");
      echo("<th>Book  price");
      echo("</tr>");
   foreach($xml->info as $t)
    {
       echo("<tr><td>".$t->bno);
       echo("<td>".$t->bname);
       echo("<td>".$t->author);
       echo("<td>".$t->year);
       echo("<td>".$t->price);
       echo("</tr>");
     }
 echo("</table>");
?>