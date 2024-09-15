<?php
  function evenodd()
 {
    echo("<br> even number=");
   for($i=1;$i<50;$i++)
     {
       if($i%2==0)
        echo($i);
    }
     echo("<br> odd number=");
     for($i=1;$i<50;$i++)
    {
       if($i%2==1)
        echo($i);
    }
 }
   evenodd();
 

?>