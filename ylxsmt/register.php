<?
	$zemail= '/^[a-zA-Z0-9][a-zA-Z0-9._-]*\@[a-zA-Z0-9]+\.[a-zA-Z0-9\.]+$/A';
	$zshenfen= '/^(([0-9]{15})|([0-9]{18})|([0-9]{17}x))$/'; 
	$zphone= "/^((13[0-9])|147|(15[0-35-9])|180|182|(18[5-9]))[0-9]{8}$/A";
	
	$name=$_POST["name"];
	$rname=$_POST["rname"];
	$phone=$_POST["phone"];
	
	if(!preg_match($zphone,$phone))
	{
		echo '手机号码格式错误！';
		exit();
	}
	$email=$_POST["email"];
	if(!preg_match($zemail,$email))
	{
		echo '邮箱格式错误！';
		exit();
	}
	$iden=$_POST["iden"];
	$idcard=$_POST["id"];
	if(!preg_match($zshenfen,$idcard))
	{
		echo '身份证格式错误！';
		exit();
	}
	$age=$_POST["age"];
	$passwd=$_POST["passwd"];

	include("conn.php");
		
	mysql_select_db($dbname,$conn); 
	$sql="SELECT * FROM iden WHERE email='$email'";
	mysql_query("set names utf8");
	$query=mysql_query($sql,$conn);
	$res=mysql_fetch_array($query);
	$tmp1 =$res['email'];
	$tmp2 =$res['iden'];
	
	if($tmp1==$email && $tmp2 ==$iden)
	{
		$sqli="INSERT INTO user (uname,passwd,phone,email,age,rname,idcard) VALUES ('$name','$passwd','$phone','$email','$age','$rname','$idcard')";
		mysql_query("set names utf8");
		$query=mysql_query($sqli,$conn);
		if($query)
		{
			echo "success!<br/>";
			echo "<a href='index.php'>返回</a>";
		}
		else
		{
			echo "error!";
		}
	}
	else
	{
		echo "error!";
	}

?>