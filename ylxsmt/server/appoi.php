<?
	if($_POST["date"]==0)
	{
		echo "未选择日期";
		exit();
	}
	$date= $_POST["date"];echo "<br/>";
	$name= $_POST["name"];echo "<br/>";
	$id= $_POST["id"];echo "<br/>";
	$phone= $_POST["phone"];echo "<br/>";
	$age= $_POST["age"];echo "<br/>";
	$expert_id=$_POST["eid"];echo "<br/>";
	
	include("conn.php");
	mysql_select_db($dbname,$conn); 
	$sql="SELECT * FROM expert WHERE id='$expert_id'";
	$query=mysql_query($sql,$conn);
	$res=mysql_fetch_array($query);
	$ori=$res['sche'];

	$ins=$ori."|id:".$id."|da:".$date."|ag:".$age."|na:".$name."|phone:".$phone."*";
	$sql2="UPDATE expert SET sche='$ins' WHERE id='$expert_id'";
	$query2=mysql_query($sql2,$conn); 
	if($query2)
	{
		echo "预约成功";
	}
	else
	{
		echo "预约失败";
	}

?>