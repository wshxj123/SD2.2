<?
	include ("conn.php");
	if(isset( $_POST["cmd"])){
		
		$expert=$_COOKIE["name"];
		$name=$_POST["name"];
		$date=$_POST["date"];
		$time=$_POST["time"];
		$sql="SELECT * FROM expert WHERE name='$expert'";
		mysql_query("set names utf8");
		$res=query($sql);
		$ori= $res["wsche"];
		
		$object="|".$name."|".$date."|".$time."*";
		//print_r($_POST);
		$out=str_replace($object,"",$ori);
		
		$sql2="UPDATE expert SET wsche = '$out' where name='$expert'";
		mysql_query("set names utf8");
		$query2=mysql_query($sql2);
		if($query2)
		{
			if($time==1)
				{
					$tmp="上午";
				}else if($time==2)
				{
					$tmp="下午";
				}else{
					$tmp="晚上";
				}
			$final=$date."th".$tmp;
			
			$sql6="SELECT * FROM user WHERE uname='$name'";
			mysql_query("set names utf8");
			$res6=query($sql6);
			$tmp=$res6['email'];
			
			if($_POST["cmd"]=="delete")
			{
				echo "删除成功!";
				require 'sendemail/phpmailer/class.phpmailer.php';
				
				$subject = '专家已取消您的预约！';
				$email = '专家预约被取消！！时间为'.$final.'   专家为'.$expert;

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

						
				} catch (phpmailerException $e) {
					// 发送失败, 处理你的异常
					echo "lost!";
				}
			}else if($_POST["cmd"]=="confirm")
			{
				$ori2=$res["sche"];
				$ins=$ori2.$object;
				$sql3="UPDATE expert SET sche = '$ins' where name='$expert'";
				mysql_query("set names utf8");
				$query3=mysql_query($sql3);
				if($query3)
				{
					echo "确认成功!";
				}else{
					echo "确认失败!";
				}

				$sql4="INSERT INTO orderlist (expert,uname,time) VALUES ( '$expert','$name','$final')";
				mysql_query("set names utf8");
				$query4=mysql_query($sql4,$conn);

				$sql5="SELECT * FROM orderlist WHERE expert='$expert' AND time='$final'";
				mysql_query("set names utf8");
				$query5=mysql_query($sql5,$conn);
				$res5=mysql_fetch_array($query5);
				$id=$res5['id'];

				require 'sendemail/phpmailer/class.phpmailer.php';
				
				$subject = '专家预约成功！';
				$email = '专家预约成功!预约号为'.$id.'  时间为'.$final.'   专家为'.$expert;

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

						
				} catch (phpmailerException $e) {
					// 发送失败, 处理你的异常
					echo "lost!";
				}

				$sql7="INSERT INTO score (id,expert,date) VALUES ('$id','$expert','$final')";
				mysql_query("set names utf8");
				$query7=mysql_query($sql7);

				$sql8="SELECT * from user WHERE uname='$name'";
				mysql_query("set names utf8");
				$query8=mysql_query($sql8);
				$res8=mysql_fetch_array($query8);
				
				
				$ooh=$res8['history'];
				$oh=$ooh.'|'.$expert.'|'.$final.'|'.$id.'*';
				
				$sql9="UPDATE user SET history='$oh' WHERE uname='$name'";
				mysql_query("set names utf8");
				$query9=mysql_query($sql9);
				
				
		
			}
		}
	}	

?>