<?php
date_default_timezone_set("prc");
$stringtime=date("Y-m-d H-i-s",time());
echo $stringtime;
$log=$stringtime;
//打开文件
$fp = fopen("log/$stringtime.txt","a");
//$fp = fopen(date('Y-m-d H-i-s',time()),"a");
//写入$con到文件
fwrite($fp,$log);
//关闭文件
fclose($fp);
?>