<?php
	$conf = file_get_contents("../conf/ServerConf.ini");
	
	$dbserver=jobconf($conf,"DBServer");
	$dbname=jobconf($conf,"DBNAME");
	$username=jobconf($conf,"USERNAME");
	$password=jobconf($conf,"PASSWORD");

	$conn = mysql_connect($dbserver,$username,$password) or die ("wrong!"); 
	
	/*mysql_select_db($dbname,$conn); 
	$sql="INSERT INTO admin (admin_id, passwd, admin_name) 
VALUES ('1', '123', 'gxcissad')";
	$query=mysql_query($sql,$conn); 
	if($query) 
	echo"success!"; 
	else 
	echo "error!"; 
	*/
?>
<?//TODO?>


<?
function jobconf($content,$item)
{
	$place=strpos($content,$item);
	$i=$place;
	
	while($content[$i]!="=")
	{
		$i++;
	}$i++;

	$res="";
	while($content[$i+1]!="\n")
	{
		$res=$res."". $content[$i];
		$i++;
	}
	return $res;
}

require 'phpmailer/class.phpmailer.php';

$tmp = $_POST["to"];
echo $tmp;

$subject = '门诊系统验证码';
$email = rand(1000,9999);


# smtp服务器地址, 如smtp.qq.com
$host = 'smtp.126.com';

# 发件人名称
$fromname = 'HIT_香烟头_自助挂号系统';

# 发件人地址和收件人地址填你的邮箱
$from = 'serf_register@126.com';
$to = $tmp;

# 你邮箱账号
$username = $from;
$passwd = 'zizhuguahao';
mysql_select_db($dbname,$conn); 
	$sql="INSERT INTO iden (email,iden) VALUES ( '$to','$email' )";
	$query=mysql_query($sql,$conn);
	if($query) 
	{
		echo"success!"; 
	}
	else
	{
		$sql2="UPDATE iden SET iden='$email' WHERE email='$to'";
		$query2=mysql_query($sql2,$conn);
	}
	
$mailer = new PHPMailer(true);
$mailer->IsHTML(true);
$mailer->IsSMTP(true);
#$mailer->SMTPDebug = true;
$mailer->CharSet = 'UTF-8';
$mailer->Encoding = 'base64';
$mailer->FromName = $fromname;
$mailer->Host = $host;
$mailer->AddAddress($to);
$mailer->From = $from;
$mailer->Subject = $subject;
$mailer->MsgHTML($email);
$mailer->SMTPAuth = true;
$mailer->Username = $username;
$mailer->Password = $passwd;

try{
	$mailer->Send();
	echo "yes";

		
} catch (phpmailerException $e) {
    // 发送失败, 处理你的异常
	echo "lost!";
}




?>
 