<?php
$data = file_get_contents("conf/ServerConf.ini");
//echo $data;
echo "\n";
jobconf($data,"DBNAME");
?>
<br>
<?
function jobconf($content,$item)
{
	$place=strpos($content,$item);
	$i=$place;
	
	while($content[$i]!="=")
	{
		$i++;
	}$i++;
	while($content[$i]!="\n")
	{
		echo $content[$i];
		$i++;
	}
}
?>


<!--
3.file_put_contents()-- 将一个字符串写入文件,与file_get_contents()经常一起用，很实用！
<br>
<?php
//要获取内容的url
$url = "http://www.baidu.com";
//获取文件内容（二进制字符串）
$data = file_get_contents($url);

//要写入文件的路径
//$path = "path";//写入到当前目录的image目录下
//file_put_contents($path, $data) or die("不能写入文件");
?>

!-->