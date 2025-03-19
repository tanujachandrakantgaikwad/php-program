<?php
 $xml=simplexml_load_file("ass3aQ7.xml");
  $obj=$xml->addChild("name","nudals");
  echo($xml->asxml());
   
?>