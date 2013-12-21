<?
	include("conn.php");
	$id=$_POST["id"];
	$score=$_POST["score"];

	mysql_select_db($dbname, $conn);
	$sql="UPDATE score SET score = '$score' WHERE id = '$id'";
	mysql_query("set names utf8");
	$query=mysql_query($sql,$conn); 
	if($query)
	{
		echo "评分成功!";
	}else{
		echo "评分失败!";
	}
?>