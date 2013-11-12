<?
	include("conn.php");
	$id=$_POST["id"];
	$score=$_POST["score"];

	mysql_select_db($dbname, $conn);
	$sql=mysql_query("UPDATE score SET score = '$score' WHERE id = '$id'");
	$query=mysql_query($sql,$conn); 
	
?>