	<?
							session_start();;

							include ("conn.php");
							
							if (isset($_COOKIE["type"]))
							{
								$intype=$_COOKIE["type"];
							}
							if($_POST["type"])
							{					
								$intype=$_POST["type"];
								setcookie("type", "$intype", time()+360);
								$intype=$_POST["type"];
							}
							
							if(!isset($intype))
							{
								exit();
							}
							$_SESSION['type']=$intype;
							if($intype==1)	//patient
							{
								$id=$_POST["id"];
								$name=$_POST["name"];
								$phone=$_POST["phone"];
								$age=$_POST["age"];
								$type=$_POST["class"];

								mysql_select_db($dbname,$conn); 
								$sql="INSERT INTO patient ( id, name, phone, age , type) 
								VALUES ( '$id','$name','$phone','$age','$type')";
								$query=mysql_query($sql,$conn); 
								
								if($query) 
								{
									echo"success!"; 
									echo "挂号成功,请稍等<br/>";

									$sql_num="SELECT * FROM patient WHERE id='$id'";
									$query_num=mysql_query($sql_num,$conn);
									$res_num=mysql_fetch_array($query_num);
									echo "你的就诊号为".$res_num['order_key'].".<br/>";
									include("patient.php");
		
								}
								else
								{ 
									echo "挂号失败!";
								}
							}

							else if($intype==2)  //医师
							{
								$passwd=null;
								$name=null;
								
								if(isset($_COOKIE["yname"]) && isset($_COOKIE["ypasswd"]))
								{
									$name=$_COOKIE["yname"];
									$passwd=$_COOKIE["ypasswd"];	
								}
								else if($_POST["name"]&&$_POST["passwd"])
								{
									$passwd=$_POST["passwd"];
									$name=$_POST["name"];
									setcookie("yname", "$name", time()+360);
									setcookie("ypasswd", "$passwd", time()+360);
								}	
								if($name==""&&$passwd=="")
								{
									echo "未登录╮(╯▽╰)╭";
									exit();
								}
															
								$_SESSION['name']=$name;
								$_SESSION['passwd']=$passwd;

								mysql_select_db($dbname,$conn); 
								$sql="SELECT * FROM doc WHERE (passwd = '$passwd') and (admin_name = '$name') ";
								$query=mysql_query($sql,$conn); 
								$res=mysql_num_rows($query);

								$sqlo="UPDATE doc SET status = 'online' WHERE admin_name='$name'";
								$online=mysql_query($sqlo,$conn);

								if($query &&  $online && $res) 
								{
									//echo"success!"; 
									//echo "welcome back .MR.".$name;
									
									while($res2=mysql_fetch_array($query))
									{
										$type=$res2['admin_type'];
									}
									include("doc.php");
								}
								else
								{ 
									echo "error!";
									echo "返回<a href='../client'>登陆</a>";
									exit();
								}
								
								require ("main.php");
								$tpl=new Smarty();
								$tpl->assign("name", "$name");
								$tpl->display("doc.htm");
							}
							else if($intype==3) 	//配药师
							{
								$passwd=null;
								$name=null;
								
								if(isset($_COOKIE["pname"]) && isset($_COOKIE["ppasswd"]))
								{
									$name=$_COOKIE["pname"];
									$passwd=$_COOKIE["ppasswd"];	
								}
								if($_POST["name"]&&$_POST["passwd"])
								{
									$passwd=$_POST["passwd"];
									$name=$_POST["name"];
									setcookie("pname", "$name", time()+360);
									setcookie("ppasswd", "$passwd", time()+360);
								}	
								if($name==""&&$passwd=="")
								{
									echo "未登录╮(╯▽╰)╭";
									exit();
								}
															
								$_SESSION['name']=$name;
								$_SESSION['passwd']=$passwd;

								mysql_select_db($dbname,$conn); 
								$sql="SELECT * FROM mec WHERE (passwd = '$passwd') and (name = '$name') ";
								$query=mysql_query($sql,$conn); 
								$res=mysql_num_rows($query);

								$sqlo="UPDATE mec SET status = 'online' WHERE name='$name'";
								$online=mysql_query($sqlo,$conn);

								if($query &&  $online && $res) 
								{
									//echo"success!"; 
									//echo "welcome back .医师.".$name;
									
									include("mec.php");
								}
								else
								{ 
									echo "error!";
									echo "返回<a href='../client'>登陆</a>";
									exit();
								}
								require ("main.php");
								$tpl=new Smarty();
								$tpl->assign("name", "$name");
								$tpl->display("mec.htm");

							}
							else if($intype==4)
							{
								$passwd=null;
								$name=null;
								
								if(isset($_COOKIE["zname"]) && isset($_COOKIE["zpasswd"]))
								{
									$name=$_COOKIE["zname"];
									$passwd=$_COOKIE["zpasswd"];	
								}
								if($_POST["name"]&&$_POST["passwd"])
								{
									$passwd=$_POST["passwd"];
									$name=$_POST["name"];
									setcookie("zname", "$name", time()+360);
									setcookie("zpasswd", "$passwd", time()+360);
								}	
								if($name==""&&$passwd=="")
								{
									echo "未登录╮(╯▽╰)╭";
									exit();
								}
															
								$_SESSION['name']=$name;
								$_SESSION['passwd']=$passwd;

								mysql_select_db($dbname,$conn); 
								$sql="SELECT * FROM expert WHERE (passwd = '$passwd') and (name = '$name') ";
								$query=mysql_query($sql,$conn); 
								$res=mysql_num_rows($query);

								if($query && $res) 
								{
									//echo"success!"; 
									//echo "welcome back .专家.".$name;
									
									include("expert.php");
								}
								else
								{ 
									echo "error!";
									echo "返回<a href='../client'>登陆</a>";
									exit();
								}
								require ("main.php");
								$tpl=new Smarty();
								$tpl->assign("name", "$name");
								$tpl->display("expert.htm");
							}
							else
							{
								exit();
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