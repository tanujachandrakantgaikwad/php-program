<?php
 $n=$_POST["t1"];
 $f=1;
for($i=1;$i<=$n;$i++)
{
  $f=$f*$i;
}
printf("factorial number=%d",$f);

?>