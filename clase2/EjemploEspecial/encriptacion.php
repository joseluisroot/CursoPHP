<?php 
$time=microtime(1);
for ($i=0;$i<100000;$i++)
   hash('md5', 'string');

echo microtime(1)-$time,': hash/md5<br>';
 ?>