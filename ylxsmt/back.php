<?


		function str_insert($str, $i, $substr){  
			$startstr="";
			$laststr="";
			for($j=0; $j<$i; $j++){  
				$startstr .= $str[$j];  
			}  
			for ($j=$i; $j<strlen($str); $j++){  
				$laststr .= $str[$j];  
			}  
			$str = ($startstr . $substr . $laststr);  
			return $str;  
		}
		


		include ("conn.php");
		
		if (isset($_COOKIE["type"]))
		{
			$intype=$_COOKIE["type"];
		}
		if(isset($_POST["type"]))
		{					
			$intype=$_POST["type"];
		}
		
		if(!isset($intype))
		{
			echo "<script>alert('请登录!');</script>";
			echo "<script>location.href='index.php';</script>";
			exit();
		}
		
		if($intype==1)	//patient
		{
			$type=$_POST["class"];
			$name=$_COOKIE["name"];

			mysql_select_db($dbname,$conn); 
			$sql="INSERT INTO patient (name,type) 
			VALUES ('$name','$type')";
			mysql_query("set names utf8");
			$query=mysql_query($sql,$conn); 
			
			if($query) 
			{
				$sql_num="SELECT * FROM patient WHERE name='$name'";
				mysql_query("set names utf8");
				$query_num=mysql_query($sql_num,$conn);
				$res_num=mysql_fetch_array($query_num);
				
				$content="success!<br/>挂号成功,请稍等<br/>"."你的就诊号为".$res_num['order_key'].".<br/>";
				//echo "你的就诊号为".$res_num['order_key'].".<br/>";
				require ("main.php");
				$tpl=new Smarty();
				$tpl->assign("content", "$content");
				$tpl->assign("type","$type");
				$tpl->display("patient.htm");
			}
			else
			{ 
				echo "挂号失败!";
			}

		}

		else if($intype==2)  //医师
		{
			$flag=0;
			if(isset($_COOKIE["name"]) && $_COOKIE["type"]==2)
			{
				$name=$_COOKIE["name"];
				$flag=1;
			}

			if(isset($_POST["name"])&& isset($_POST["passwd"]))
			{
				$passwd=$_POST["passwd"];
				$name=$_POST["name"];

				mysql_select_db($dbname,$conn); 
				$sql="SELECT * FROM doc WHERE (passwd = '$passwd') and (admin_name = '$name') ";
				mysql_query("set names utf8");
				$query=mysql_query($sql,$conn); 
				$res=mysql_num_rows($query);

				$sqlo="UPDATE doc SET status = 'online' WHERE admin_name='$name'";
				mysql_query("set names utf8");
				$online=mysql_query($sqlo,$conn);
			
				if($query &&  $online && $res) 
				{
					$res2=mysql_fetch_array($query);
				
					$type=$res2['admin_type'];
				
					setcookie("name", "$name", time()+3600);
					setcookie("type", "$intype", time()+3600);
					$flag=1;
				}else{
					echo "error!";
					echo "返回<a href='index.php'>登录</a>";
					exit();
				}
	
			}

			if($flag)
			{
				$sql="SELECT * FROM doc WHERE admin_name = '$name' ";
				mysql_query("set names utf8");
				$query=mysql_query($sql,$conn); 
				$res2=mysql_fetch_array($query);
				
				$type=$res2["admin_type"];
				
				include("doc.php");
				require ("main.php");
				$tpl=new Smarty();
				$tpl->assign("name", "$name");
				//$tpl->assign("admin_type","$admin_type");
				$tpl->display("doc.htm");
			}		
			
		}
		else if($intype==3) 	//配药师
		{
			$flag=0;
			if(  isset( $_COOKIE["type"]) && isset($_COOKIE["name"]))
			{
				if( $_COOKIE["type"] ==3)
				{
					$name=$_COOKIE["name"];	
					$flag=1;
				}
			}
			if(isset($_POST["name"])&& isset($_POST["passwd"]))
			{
				$passwd=$_POST["passwd"];
				$name=$_POST["name"];
		
				mysql_select_db($dbname,$conn); 
				$sql="SELECT * FROM mec WHERE (passwd = '$passwd') and (name = '$name') ";
				mysql_query("set names utf8");
				$query=mysql_query($sql,$conn); 
				$res=mysql_num_rows($query);

				$sqlo="UPDATE mec SET status = 'online' WHERE name='$name'";
				mysql_query("set names utf8");
				$online=mysql_query($sqlo,$conn);

				if($query &&  $online && $res) 
				{
				//echo"success!"; 
				//echo "welcome back .医师.".$name;
					$flag=1;
					setcookie("name", "$name", time()+3600);
					setcookie("type", "$intype", time()+3600);
				}
				else
				{ 
					echo "error!";
					echo "返回<a href='index.php'>登录</a>";
					exit();
				}
			}

			if($flag)
			{
				include("mec.php");
			}

		}
		else if($intype==4)//专家
		{
			$flag=0;
			if(isset($_COOKIE["name"]) && $_COOKIE["type"]==4 )
			{
				$name=$_COOKIE["name"];
				$flag=1;
			}

			if(isset($_POST["name"])&&isset($_POST["passwd"]))
			{
				$passwd=$_POST["passwd"];
				$name=$_POST["name"];

				mysql_select_db($dbname,$conn); 
				$sql="SELECT * FROM expert WHERE (passwd = '$passwd') and (name = '$name') ";
				mysql_query("set names utf8");
				$query=mysql_query($sql,$conn); 
				$res=mysql_num_rows($query);

				if($query && $res) 
				{
					setcookie("name", "$name", time()+3600);
					setcookie("type", "$intype", time()+3600);
					//echo"success!"; 
					//echo "welcome back .专家.".$name;
					$flag=1;
				}
			}

			if($flag)
			{
				$sql_num="SELECT * FROM expert WHERE name='$name'";
				mysql_query("set names utf8");
				$query_num=mysql_query($sql_num,$conn);
				$pares=mysql_fetch_array($query_num);

				$News=array();
				$News=explode("*",$pares['wsche']);

				for($i=0;$i<count($News)-1;$i++)
				{
					$temp=explode("|",$News[$i]);
					
					
					if($temp[3]==1)
					{
						$time="上午";
					}else if($temp[3]==2)
					{
						$time="下午";
					}else{
						$time="晚上";
					}
					$sql2="SELECT * FROM user WHERE (uname = '$temp[1]') ";
					mysql_query("set names utf8");
					$query2=mysql_query($sql2,$conn); 
					$res2=mysql_fetch_array($query2);
					
					$Pati[] = array("id"=>$res2['id'],"da"=>$temp[2]."th".$time,"ag"=>$res2['age'],"na"=>$res2['uname'],"phone"=>$res2['phone'],"name"=>$res2['uname'],"date"=>$temp[2] ,"time"=>$temp[3]);
				}
				
				require ("main.php");
				$tpl=new Smarty();
				$tpl->assign("News", $Pati);
				$tpl->assign("co_use",$name);
				$tpl->assign("del_use",$name);
				$tpl->assign("name", $name);
				$tpl->display("expert.htm");
			}
			else
			{ 
				echo "error!";
				echo "返回<a href='index.php'>登录</a>";
				exit();
			}
			
		}
		else if($intype==5)
		{
			$name=$_POST['name'];
			$passwd=$_POST['passwd'];

			mysql_select_db($dbname,$conn); 
			$sql="SELECT * FROM user WHERE (passwd = '$passwd') and (uname = '$name') ";
			mysql_query("set names utf8");
			$query=mysql_query($sql,$conn); 
			$res=mysql_num_rows($query);

			if($query && $res) 
			{
				setcookie("name", "$name", time()+3600);
				setcookie("type", "$intype", time()+3600);
				echo "登录成功!";
				//$post_data = array(   
				//  'user' => '$name' 
				//);

				echo "<script>location.href='index.php'</script>";
				
			}
			else
			{
				echo "登录失败.点击<a href='index.php'>返回</a>";
			}
		}
		else
		{
			exit();
		}
				
		if(isset($_POST["cmd"]) && $_POST["cmd"]=="exit" && $_COOKIE["type"]==2)
		{
				setcookie("name", "$name", time()-3600);
				setcookie("type", "$intype", time()-3600);
				include("conn.php");

				$name=$_POST["name"];
				mysql_select_db($dbname,$conn); 
				$sql="UPDATE doc SET status = 'offline' WHERE admin_name = '$name' ";
				mysql_query("set names utf8");
				$query=mysql_query($sql,$conn); 
				if($query) 
				{
					echo "注销成功!";
					setcookie("passwd", "", time()-360);
					setcookie("name", "", time()-360);
				}
				else
				{
					echo "╮(╯▽╰)╭";
				}

		}

		if(isset($_POST["cmd"]) && $_POST["cmd"]=="exit" && $_COOKIE["type"]==4)
		{
			echo "expert exit!!";
			setcookie("name", "$name", time()-3600);
			setcookie("type", "$intype", time()-3600);
		}

		if(isset($_POST["cmd"]) && $_POST["cmd"]=="exit" && $_COOKIE["type"]==3)
		{
			echo "注销成功!";
			setcookie("name", "$name", time()-3600);
			setcookie("type", "$intype", time()-3600);
		}


	/*  MYSQL操作实例:添加医师
		$conf = file_get_contents("conf/ServerConf.ini");
		
		echo $dbserver=jobconf($conf,"DBServer");
		echo $dbname=jobconf($conf,"DBNAME");
		echo $username=jobconf($conf,"USERNAME");
		echo $passwd=jobconf($conf,"PASSWORD");

		$conn = mysql_connect($dbserver,$username,$passwd) or die ("wrong!"); 
		mysql_select_db($dbname,$conn); 
		$sql="INSERT INTO admin (admin_id, passwd, admin_name) 
	VALUES ('1', '123', 'gxcissad')";
		mysql_query("set names utf8");
		$query=mysql_query($sql,$conn); 
		if($query) 
		echo"success!"; 
		else 
		echo "error!"; 
	*/


	//TODO  - exit -
	//1.修改数据库中status值 √
	//2.删除session		√
	//3.在所长办公室添加一个函数设置一个定时运行的函数自动获取score中的评分取平均值存入医师的表中
	//4.[3]中的函数还包括自动踢出太久未回复响应的用户并修改数据库中的值.
	//5.出于[4]的考虑所以要写一个js向服务器发送心脏响应.(替代方法?因为用户有可能会禁用js.如果不能替代那么4中的「太久未响应」的时间响应得加长)


?>