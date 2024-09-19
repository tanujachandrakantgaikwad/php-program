<?php
  $s1="Tanuja";
   {
     $cnt=0;
      for($i=0;$i<strlen($s1);$i++)
    {
       if($s1[$i]=='a' || $s1[$i]=='A'||
          $s1[$i]=='e' || $s1[$i]=='E'||
          $s1[$i]=='i' || $s1[$i]=='I'||
          $s1[$i]=='o'|| $s1[$i]=='O'||
          $s1[$i]=='u'|| $s1[$i]=='U')
        $cnt++;
   }
  echo("<br> total vowels count=".$cnt);
}
?>