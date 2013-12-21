<?
	
	$type= $_POST["type"];
	//根据type获取并返回推荐医生的id
	//echo "2|3";

	include("conn.php");

	mysql_select_db($dbname,$conn); 
	$sql="SELECT * FROM medicine WHERE type = '$type'";
	mysql_query("set names utf8");
	$query=mysql_query($sql,$conn);


	while($res=mysql_fetch_array($query))
	{
		echo "<br/>";
		echo "<div id='name".$res['mecid']."'>".$res['name']."</div> ";
		echo "<label id='price".$res['mecid']."'>价格：".$res['price']."元</label><br/>";
		echo "数量:<input id='num".$res['mecid']."' name='number' type='number'></input>";
		echo "服用规则:<input id='rule".$res['mecid']."' type='Text' name='rule'></input>";
		echo "<a onclick='add(".$res['mecid'].")'>添加</a>";
	}


?>