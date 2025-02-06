<?php
 $xml=simplexml_load_file("player.xml");
 if($xml==false)
 die("File not found");
   foreach($xml->info as $a)
{
  echo("<br>Country=".$a->country);
  echo("<br>player name=".$a->pname);
  echo("<br>wicket=".$a->wicket);
  echo("<br>run=".$a->run);

}
?>