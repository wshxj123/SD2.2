<?
	include("conn.php");

	$name =array();
	$price= array();
	$type=array();
	mysql_select_db($dbname,$conn); 
	for($i=0;$i<20;$i++)
	{
		$sql="SELECT * FROM medicine WHERE type='$i')";
		$query=mysql_query($sql,$conn); 
		$res2=mysql_num_rows($query);
		while($res=mysql_fetch_array($query) && $res2)
		{
			$name[i]="<table><tr><td>名字:".$res['name']."</td></tr>";		
			$price[i]="<table><tr><td>价格:".$res['price']."</td></tr>";
			$type[i]=$res['type'];
		}
	}

	for($i=0;$i<20;$i++)
	{
		echo $name[$i];
	}
	
	require ("main.php");
	//$tpl=new Smarty();
	
	//$tpl->assign("name", "$name[0]");
	//$tpl->assign("content","药物//待从MYSQL中取");
	//$tpl->display("medicine.php");

?>