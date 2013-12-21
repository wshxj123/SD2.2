<?
	$_POST["time"];
	$flag=1;
	
	if($_POST["date"]==0)
	{
		echo "未选择日期";
		exit();
	}
	$name= $_POST["user"];
	$expert_id = $_POST["eid"];
	$date=$_POST["date"];
	$time=$_POST["time"];
	include("conn.php");
	mysql_select_db($dbname,$conn); 
	$sql="SELECT * FROM expert WHERE id='$expert_id'";
	mysql_query("set names utf8");
	$query=mysql_query($sql,$conn);
	$res=mysql_fetch_array($query);
	$ori=$res['wsche'];
	$part=array();
	$part=explode("|",$ori);

	$ori1=$res['sche'];
	$part=explode("|",$ori1);
	
	$len=count($part)-1;
	//print_r($part);
	
	if($date-date("d")>7)
	{
		echo "非法预约";
		exit();
	}

	$cnt=0;
	for($i=0;$i<$len;$i=$i+3)
	{
		if($part[$i+2] == $date && $part[$i+3] == $time."*" && $part[$i+1] == $name)
		{
			echo "你已经预约过这个时间段!";
			exit();
		}

		if($part[$i+2] == $date && $part[$i+3] == $time."*")
		{
			//echo "已被预订！";
			//echo "<script>location.href='appo.php'</script>";
			$cnt++;
			if($cnt>2)
			{
				echo "预订人数已满！";
				exit();
			}
		}
	}
	$ins=$ori."|".$name."|".$date."|".$time."*" ;
				//|用户名|日期|时间段|
			if($flag)
			{
				$sql2="UPDATE expert SET wsche='$ins' WHERE id='$expert_id'";
				mysql_query("set names utf8");
				$query2=mysql_query($sql2,$conn); 
				if($query2)
				{
					echo "预约成功";
				}
				else
				{
					echo "预约失败";
				}
			}
	/*

	*/
/*
	include("conn.php");
	mysql_select_db($dbname,$conn); 
	$sql="SELECT * FROM expert WHERE id='$expert_id'";
	mysql_query("set names utf8");
	$query=mysql_query($sql,$conn);
	$res=mysql_fetch_array($query);
	$ori=$res['sche'];

	$ins=$ori."|id:".$id."|da:".$date."|ag:".$age."|na:".$name."|phone:".$phone."*";
	$sql2="UPDATE expert SET sche='$ins' WHERE id='$expert_id'";
	mysql_query("set names utf8");
	$query2=mysql_query($sql2,$conn); 
	if($query2)
	{
		echo "预约成功";
	}
	else
	{
		echo "预约失败";
	}
*/
?>