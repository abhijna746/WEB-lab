<?php
$fp =fopen("counterlog.txt","r");
$c= fread($fp,10);
fclose($fp);
$c=$c +1;
echo"<p>Page Views:".$c."</p>";
$fp=fopen("counterlog.txt","w");
fwrite($fp,$c);
fclose($fp)
?>