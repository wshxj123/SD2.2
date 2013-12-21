<?
	include ("conn.php");
	$eid=$_POST["eid"];
	
	$sql="SELECT * FROM expert WHERE id='$eid'";
	mysql_query("set names utf8");
	$res=query($sql);
	$ori=$res["sche"];
	$tuple=array();
	$tuple=explode("*",$ori);
	
	for($i=0;$i<count($tuple)-1;$i++)
	{
		$tmp=explode("|",$tuple[$i]);
		{
			
			if($tmp[3]==1)
			{
				$time="上午";
			}else if($tmp[3]==2)
			{
				$time="下午";
			}else{
				$time="晚上";
			}
			echo "有用户预约了".$tmp[2]."日".$time."<br/> ";
		}
	}

	

?>