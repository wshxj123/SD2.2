<?
	include("conn.php");
	$id=$_POST['order_key'];
	$content=$_POST['res'];
	
	$sql="INSERT INTO drug_bill(id,content) VALUES('$id','$content')"; 
	mysql_query("set names utf8");
	$query=mysql_query($sql,$conn);
	
	if($query)
		echo "药单成功写入数据库！";
	else
		echo "失败啦~~~";

?>