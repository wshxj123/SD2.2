<?php
date_default_timezone_set("prc");
$stringtime=date("Y-m-d H-i-s",time());
echo $stringtime;
$log=$stringtime;

$fp = fopen("log/$stringtime.txt","a");
//$fp = fopen(date('Y-m-d H-i-s',time()),"a");

fwrite($fp,$log);

fclose($fp);
?>