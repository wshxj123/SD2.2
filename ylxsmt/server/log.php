<?php
date_default_timezone_set("prc");
$stringtime=date("Y-m-d H-i-s",time());
echo $stringtime;
$log=$stringtime;
//���ļ�
$fp = fopen("log/$stringtime.txt","a");
//$fp = fopen(date('Y-m-d H-i-s',time()),"a");
//д��$con���ļ�
fwrite($fp,$log);
//�ر��ļ�
fclose($fp);
?>