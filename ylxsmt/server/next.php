<?
	if($_POST["op"]=="next")
	{
		include("conn.php");

		$name=$_POST["name"];
		
		mysql_select_db($dbname,$conn); 
		$sql="SELECT * FROM patient WHERE order_key = (SELECT MIN(order_key) FROM patient)";
		$query=mysql_query($sql,$conn); 
		
		$id=null;
		$order=null;
		while($res=mysql_fetch_array($query))
		{
			$id=$res['id'];
			$order=$res['order_key'];
			echo "<table><tr><td>身份证:".$res['id']."</td></tr>";
			echo "<tr><td>姓名:".$res['name']."</td></tr>";
			echo "<tr><td>手机号:".$res['phone']."</td></tr></table>";
			echo "<tr><td>年龄:".$res['age']."</td></tr><br/>";
		}
		$sql3="INSERT INTO score (id,doc) VALUES ('$order','$name')";
		$query3=mysql_query($sql3,$conn); 
			
		$sql2="DELETE FROM patient WHERE id = '$id'";
		$query2=mysql_query($sql2,$conn);

		$sql4="SELECT * FROM doc WHERE admin_name = '$name'";
		$query4=mysql_query($sql4,$conn);
		$patient_num=0;
		while($res4=mysql_fetch_array($query4))
		{
			$patient_num=$res4['patient_num'];
		}
		$patient_num++;
		$sql5="UPDATE doc SET patient_num = '$patient_num' WHERE admin_name = '$name'";
		$query5=mysql_query($sql5,$conn);

		mysql_close();
	}
	else
	{
		echo "通讯失败!";
		exit();
	}
?>
