﻿<?
	//echo "1aaa|21212|3321|";
	$type= $_POST["type"];
	//根据type获取并返回推荐医生的id
	//echo "2|3";

	include("conn.php");

	$sql="SELECT * FROM expert WHERE type = '$type'";
	mysql_query("set names utf8");
	$query=mysql_query($sql,$conn);
	
	$ret="";
	while($res=mysql_fetch_array($query))
	{
		if($res['score']>9 && $res['patientnum']>20)//也可以按照排序前三位推荐.这里是评分超过9分的才能被推荐
		{
			$ret=$ret.$res['id'];
			$ret=$ret."|";
		}
	}
	$newstr = substr($ret,0,strlen($ret)-1);
	echo $newstr;
?>