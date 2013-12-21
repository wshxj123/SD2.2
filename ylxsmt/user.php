<?
	include ("conn.php");
	$name = $_COOKIE["name"];
	
	$sql="SELECT * FROM user WHERE uname = '$name'";
	mysql_query("set names utf8");
	$res=query($sql);
	$uname=$res["uname"];
	$rname=$res["rname"];
	$phone=$res["phone"];
	$email=$res["email"];
	$age=$res["age"];
	$history=$res["history"];
	$content="用户名:".$uname."<br/>姓&nbsp&nbsp名:".$rname."<br/>手机号码:".$phone."<br/>邮&nbsp&nbsp箱:".$email."<br/>年龄:".$age;

	require ("main.php");
	$tpl=new Smarty();
	$tpl->assign("name",$uname);
	$tpl->assign("content",$content);
	$tpl->display("user.htm");
	

?>