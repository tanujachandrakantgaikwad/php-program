<html>
   <body>
     <form method="post" action="#">
     <h1>SERVER INFO...</h1>
   </form>
   </body>
</html>
<?php
  $server=["server name"=>$_SERVER['SERVER_NAME'],
                    "server addr"=>$_SERVER['SERVER_ADDR']];

 foreach($server as $key=>$value)
{
   echo("<tr><td><strong>$key</strong></td>
         <td><strong>$value</strong></td></tr>");
}
?>