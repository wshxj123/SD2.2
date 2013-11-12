<?
	function score()
	{
		include("conn.php");
		
		mysql_select_db($dbname,$conn); 
		$sql="SELECT * FROM doc";
		$query=mysql_query($sql,$conn);
		while($res=mysql_fetch_array($query))
		{
			$num=$res['patient_num'];
			$name=$res['admin_name'];
			$score=$num*$res['score'];

			$sql2="SELECT * FROM score WHERE doc = '$name'";
			$query2=mysql_query($sql2,$conn);
			$sum=$score;
			while($res2=mysql_fetch_array($query2))
			{
				$sum+=$res2['score'];
			}
			$ave=$sum/$num;
			
			$sql3="UPDATE doc SET score='$ave' WHERE admin_name='$name'";
			$query3=mysql_query($sql3,$conn);

			$sql4="DELETE FROM score WHERE doc = '$name'";
			$query4=mysql_query($sql4,$conn);
			if($query3 & $query4)
			{
				echo "success!<br/>";
			}
			else
			{
				echo "╮(╯▽╰)╭";
			}
		}
	
	}



	//ignore_user_abort(); 关掉浏览器，PHP脚本也可以继续执行.慎用
	set_time_limit(0);
	$interval=60*30;	//一小时更新一次
	do
	{
		score();
		sleep($interval);// 等待5s    
	}while(true);
	
?>