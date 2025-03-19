<?php
 $xml=simplexml_load_file("ass3aQ4.xml");
  $obj=$xml->addChild("name","maya");
  echo($xml->asxml());
   
?>