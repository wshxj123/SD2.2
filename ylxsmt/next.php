<?
	if($_POST["op"]=="next")
	{
		include("conn.php");

		$name=$_POST["name"];
		$type=$_POST["type"];
		
		mysql_select_db($dbname,$conn); 
		$sql="SELECT * FROM patient WHERE type='$type'";
		mysql_query("set names utf8");
		$query=mysql_query($sql,$conn); 
		
		$id=null;
		$order=null;
		$res=mysql_fetch_array($query);
		
		$name=$res['name'];
		$order=$res['order_key'];
			
		$sql1="SELECT * FROM user WHERE uname='$name'";
		mysql_query("set names utf8");
		$query1=mysql_query($sql1,$conn);
		$res1=mysql_fetch_array($query1);
			
		echo "<tr><td>就诊号:".$order."</td></tr><br/>";
		echo "<tr><td>身份证:".$res1['idcard']."</td></tr><br/>";
		echo "<tr><td>姓名:".$res1['rname']."</td></tr><br/>";
		echo "<tr><td>手机号:".$res1['phone']."</td></tr><br/>";
		echo "<tr><td>年龄:".$res1['age']."</td></tr><br/>";
		
			
		$sql2="DELETE FROM patient WHERE order_key = '$order'";
		mysql_query("set names utf8");
		$query2=mysql_query($sql2,$conn);

		$sql4="SELECT * FROM doc WHERE admin_name = '$name'";
		mysql_query("set names utf8");
		$query4=mysql_query($sql4,$conn);
		$patient_num=0;
		while($res4=mysql_fetch_array($query4))
		{
			$patient_num=$res4['patient_num'];
		}
		$patient_num++;
		$sql5="UPDATE doc SET patient_num = '$patient_num' WHERE admin_name = '$name'";
		mysql_query("set names utf8");
		$query5=mysql_query($sql5,$conn);

		mysql_close();
	}
	else
	{
		echo "通讯失败!";
		exit();
	}
?>
