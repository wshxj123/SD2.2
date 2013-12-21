<?

	include("conn.php");
	if(!isset($_COOKIE["admin"]) )
	{
		echo "
	<script src='js/main.js'></script>
	<form action = 'adoc.php' method=POST>
		姓名:<input type=text name='admin'></input><br/>
		密码:<input type=text name='admin_passwd'></input><br/>
		<div class='control-group'>
			<div class='controls'>
				 <button type='submit' class='btn' onclick='getIn()'>登陆</button>
			</div>
		</div>
	</form>
	";
	}

	
	if(isset($_COOKIE["admin"]))
	{
		
		$admin=$_COOKIE["admin"];
		setcookie("admin",$admin,time()+3600);
	}

	if(isset($_COOKIE["admin"]) && isset($_POST["cmd"]))
	{
		if($_POST["cmd"]=="exit")
		{
			$admin=$_COOKIE["admin"];
			setcookie("admin",$admin,time()-3600);
			echo "<script>location.href='adoc.php'</script>";
		}
	}

	if(isset($_POST["admin"])  )
	{
		mysql_select_db($dbname,$conn); 
		$admin=$_POST["admin"];
		$passwd=md5($_POST["admin_passwd"]);		
		$sql="SELECT * FROM admin WHERE name='$admin' AND passwd='$passwd'";
		mysql_query("set names utf8");
		$query=mysql_query($sql,$conn);
		$res=mysql_fetch_array($query);
		if($query && $res)
		{
			echo "<br/>登陆成功!<br/>";
			echo "<script>location.href='adoc.php'</script>";
			setcookie("admin",$admin,time()+360);
			echo "welcome!".$admin;
		}
		else
		{
			echo "请登录!";
		}
	}

	
	if(isset($_COOKIE["admin"]) && isset($_POST["name"]))
	{
		if($_POST["type"] =="0")
		{
			$name=$_POST["name"];
			$passwd=$_POST["passwd"];
			
			mysql_select_db($dbname,$conn); 
			$sql="INSERT INTO mec (passwd, name) 
		VALUES ('$passwd', '$name')";
			mysql_query("set names utf8");
			$query=mysql_query($sql,$conn); 
			if($query) 
			{
				echo"success!"; 
			}
			else
			{
				echo "error!";
			}
		}
		else if($_POST["type"]==1)
		{
			$name=$_POST["name"];
			$passwd=$_POST["passwd"];
			$type=$_POST["class"];
			
			mysql_select_db($dbname,$conn); 
			$sql="INSERT INTO doc (passwd, admin_name,admin_type) 
		VALUES ('$passwd', '$name', '$type')";
			mysql_query("set names utf8");
			$query=mysql_query($sql,$conn); 
			if($query) 
			{
				echo"success!"; 
			}
			else
			{
				echo "error!";
			}
		}else if($_POST["type"] =="2")
		{
			$name=$_POST["name"];
			$passwd=$_POST["passwd"];
			$type=$_POST["class"];
			
			mysql_select_db($dbname,$conn); 
			$sql="INSERT INTO expert (passwd, name,type) 
		VALUES ('$passwd', '$name', '$type')";
			mysql_query("set names utf8");
			$query=mysql_query($sql,$conn); 
			if($query) 
			{
				echo"success!"; 
			}
			else
			{
				echo "error!";
			}
		}
	}else if(isset($_COOKIE["admin"]) && !isset($_POST["name"])){
	{
		echo "
<script src='js/main.js'></script>

所长办公室
<form class='form-horizontal' action='adoc.php' method='POST'>
				<div class='control-group'>
					 <label class='control-label'>用 户</label>
					<div class='controls'>
						<input id='inputName' type='text' name='name'/>
					</div>
				</div>
				<div class='control-group'>
					 <label class='control-label'>密 码</label>
					<div class='controls'>
						<input id='inputPassword' type='password' name='passwd'/>
					</div>
				</div>
				<div class='control-group'>
					 <label class='control-label'>科 目</label>
					<div class='controls'>
						<input id='inputClass' type='Number' name='class'/>
					</div>
				</div>
				<div class='control-group'>
					 <label class='control-label'>岗 位</label>
					<div class='controls'>
						<input id='inputType' type='Number' name='type'/>
					</div>
				</div>
				<div class='control-group'>
					<div class='controls'>
						 <button type='submit' class='btn' onclick='getIn()'>添加</button>
					</div>
				</div>
</form>
0:配药师
1:医师
2:砖家

				<form class='form-horizontal' action='auto.php' method='POST'>
						<input type=hidden name='cmd' value='run'></input>		
						<br/>系统启动:<input type=submit value='run'></input>
				</form>

				<form class='form-horizontal' action='adoc.php' method='POST'>
						<input type=hidden name='cmd' value='exit'></input>		
						<br/><input type=submit value='离开'></input>
				</form>
";
	}
	
	}


?>