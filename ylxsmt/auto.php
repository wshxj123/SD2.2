<?
	
	include("conn.php");
	function score()
	{
		
		$sql="SELECT * FROM expert";
		mysql_query("set names utf8");
		$query=mysql_query($sql);
		while($res=mysql_fetch_array($query))
		{
			$num=$res['patientnum'];
			$name=$res['name'];
			$score=$num*$res['score'];

			$sql2="SELECT * FROM score WHERE expert = '$name'";
			mysql_query("set names utf8");
			$query2=mysql_query($sql2);
			$sum=$score;

			while($res2=mysql_fetch_array($query2))
			{
				if($res2['score']>10)
				{
					continue;
				}
				$sum+=$res2['score'];
				$num++;
			}
			
			if($num!=0)
			{
				$ave=$sum/$num;
				if($ave>10)
				{
					$ave=0;
				}
			}else{
				$ave=0;
			}
			
			
			$sql3="UPDATE expert SET score='$ave', patientnum='$num' WHERE name='$name'";
			mysql_query("set names utf8");
			$query3=mysql_query($sql3);

			$sql4="DELETE FROM score WHERE expert = '$name'";
			mysql_query("set names utf8");
			$query4=mysql_query($sql4);
			if($query3 && $query4)
			{
				echo $name."'s score calculate success! final score:".$ave."<br/>";
			}
			else
			{
				echo "失败喽~";
			}
		}
	
	}


	function update_sche()
	{
		$sql="SELECT * FROM expert";
		mysql_query("set names utf8");
		$query=mysql_query($sql);
		
		while($res=mysql_fetch_array($query))
		{
			$name=$res['name'];

			$tmp=array();
			$tmp=explode("*",$res['sche']);
			//print_r($tmp);
			$yesday=date("d")-1;
			for($i=0;$i<count($tmp)-1;$i++)
			{
	
				$tuple[$i]=explode("|",$tmp[$i]);

				//echo $tuple[$i][2]." ".$tuple[$i][1]." ".$tuple[$i][3]." ";
				if($tuple[$i][2]==$yesday || $tuple[$i][2]==$yesday-1 || $tuple[$i][2]==$yesday-2)
				{
					$delete="|".$tuple[$i][1]."|".$tuple[$i][2]."|".$tuple[$i][3]."*";
					//echo $delete;
					$out=str_replace($delete,"",$res['sche']);
					
					$sql2="UPDATE expert SET sche='$out' WHERE name='$name'";
					mysql_query("set names utf8");
					$query2=mysql_query($sql2);
					{
						if($query2)
						{
							echo "expert ".$name."'s schedule table update done!<br/>";
						}
					}
				}
			}

			$tmp2=array();
			$tmp2=explode("*",$res['wsche']);
			
			for($i=0;$i<count($tmp2)-1;$i++)
			{
	
				$tuple2[$i]=explode("|",$tmp2[$i]);

				if($tuple2[$i][2]==$yesday || $tuple2[$i][2]==$yesday-1 || $tuple2[$i][2]==$yesday-2)
				{
					$delete2="|".$tuple2[$i][1]."|".$tuple2[$i][2]."|".$tuple2[$i][3]."*";

					$out=str_replace($delete2,"",$res['wsche']);
					
					$sql3="UPDATE expert SET wsche='$out' WHERE name='$name'";
					mysql_query("set names utf8");
					$query3=mysql_query($sql3);
					{
						if($query3)
						{
							echo "expert ".$name."'s wait_check schedule table update done!<br/>";
						}
					}
				}
		
			}

			
		}
		
	}
	


	

	if(isset($_POST["cmd"]))
	{
		if($_POST["cmd"]=="run")
		{
			score();
			update_sche();
		}
	}




/*
	ignore_user_abort(); //关掉浏览器，PHP脚本也可以继续执行.慎用
	set_time_limit(0);
	$interval=60*30;	//每半小时更新一次
	do
	{
		score();
		sleep($interval);//等待30分钟  
	}while(true);
	
*/

?>