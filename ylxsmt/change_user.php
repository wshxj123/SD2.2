<?
	include("conn.php");
	if(isset($_POST["name"]) && isset($_COOKIE["name"]))
	{
		mysql_select_db($dbname,$conn); 
		$name=$_COOKIE["name"];
		
		$phone=$_POST["phone"];
		$age=$_POST["age"];
		$rname=$_POST["name"];
		$email=$_POST["email"];
		$sql="UPDATE user SET phone='$phone' ,email='$email',age='$age' ,rname='$rname' WHERE uname='$name'";
		mysql_query("set names utf8");	
		$query=mysql_query($sql,$conn); 
		if($query)
		{
			echo "<script>alert('success!');
			location.href='user.php';
			</script>";
		}else{
			echo "lost!";
		}
	}else{
		$name=$_COOKIE["name"];
		$sql="SELECT * FROM user WHERE uname='$name'";
		mysql_query("set names utf8");
		$res=query($sql);

		require ("main.php");
		$tpl=new Smarty();
		$tpl->assign("name",$res['rname']);
		$tpl->assign("phone",$res['phone']);
		$tpl->assign("email",$res['email']);
		$tpl->assign("age",$res['age']);
		$tpl->display("change.htm");
	}
?>