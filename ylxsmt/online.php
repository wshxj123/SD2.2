<?
	$type=$_POST["type"];
	include("conn.php");
	mysql_select_db($dbname,$conn); 
	$sql="SELECT * FROM patient WHERE type='$type'";
	mysql_query("set names utf8");
	$query=mysql_query($sql,$conn); 
	$result=mysql_num_rows($query);
	echo "现在有 ".$result."人在排队<br/>";

	mysql_select_db($dbname,$conn); 
	$sql2="SELECT * FROM doc WHERE status='online' and admin_type='$type'";
	mysql_query("set names utf8");
	$query2=mysql_query($sql2,$conn); 
	$result2=mysql_num_rows($query2);
	echo "现在有 ".$result2."位医师在值班<br/>";
	
?>
