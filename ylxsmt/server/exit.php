<?
	include("conn.php");

	$name=$_POST["name"];
	mysql_select_db($dbname,$conn); 
	$sql="UPDATE doc SET status = 'offline' WHERE admin_name = '$name' ";
	$query=mysql_query($sql,$conn); 
	if($query) 
	{
		echo "注销成功!";
		setcookie("passwd", "", time()-360);
		setcookie("name", "", time()-360);
		session_unset();
	}
	else
	{
		echo "╮(╯▽╰)╭";
	}

?>