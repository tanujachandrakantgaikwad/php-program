<?php
 $xml=simplexml_load_file("ass3aQ9.xml");
  $obj=$xml->addChild("name","Tanuja");
  $obj->addAttribute("class","ty");
  echo("<br>");
  echo($xml->asxml());
    echo("<br>");

?>