﻿<script src="../client/js/main.js"></script>

所长办公室
<form class="form-horizontal" action="adoc.php" method="POST">
				<div class="control-group">
					 <label class="control-label">用 户</label>
					<div class="controls">
						<input id="inputName" type="text" name="name"/>
					</div>
				</div>
				<div class="control-group">
					 <label class="control-label">密 码</label>
					<div class="controls">
						<input id="inputPassword" type="password" name="passwd"/>
					</div>
				</div>
				<div class="control-group">
					 <label class="control-label">科 目</label>
					<div class="controls">
						<input id="inputClass" type="Number" name="class"/>
					</div>
				</div>
				<div class="control-group">
					 <label class="control-label">岗 位</label>
					<div class="controls">
						<input id="inputType" type="Number" name="type"/>
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						 <button type="submit" class="btn" onclick="getIn()">添加</button>
					</div>
				</div>
</form>
0:配药师
1:医师
2:砖家

<?
	include("conn.php");

	if($_POST["name"] =="")
	{
		exit();
	}
	
	if($_POST["type"] =="0")
	{
		$name=$_POST["name"];
		$passwd=$_POST["passwd"];
		
		mysql_select_db($dbname,$conn); 
		$sql="INSERT INTO mec (passwd, name) 
	VALUES ('$passwd', '$name')";
		echo $sql;
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
	


?>