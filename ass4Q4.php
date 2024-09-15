<?php
 function maximum($p,$q,$r)
 {
    if($p>$q && $p<$r)
      return $p;
    else if($q>$p && $q>$r)
      return $q;
    else if($r>$p && $r>$q)
       return $r;
  }
 echo("<br> max no=".maximum(23,54,87));
?>