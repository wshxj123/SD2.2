
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>药剂师个人中心</title>
		<link rel="stylesheet" href="css/960.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="css/template.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="css/colour.css" type="text/css" media="screen" charset="utf-8" />
		<h1 id="head">药剂师个人中心</h1>

		<ul id="navigation">
			<li><span class="active">Overview</span></li>
			<li><a href="" onclick="exit()">退出</a></li>
		</ul>
		<div id="content" class="container_16 clearfix">
		<label>药剂师,<?echo $name;?>你好</label>	
	</head>
	<div class="grid_16">

	<script>
		function exit()
		{
			
			{
			var xmlhttp;

			if (window.XMLHttpRequest)
			  {
			  xmlhttp=new XMLHttpRequest();
			  }
			else
			  {
			  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
			xmlhttp.onreadystatechange=function()
			  {
			  if (xmlhttp.readyState==4 && xmlhttp.status==200)
				{
					
				}
			  }
				xmlhttp.open("POST","back.php",true);
				xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
				xmlhttp.send("cmd=exit");alert("退出成功!"); 	
			}
		}
	</script>
<?
$sql_num="SELECT * FROM drug_bill";

mysql_query("set names utf8");
$query_num=mysql_query($sql_num,$conn);
//$number=mysql_num_rows($query_num);

require("main.php");

while($res=mysql_fetch_array($query_num))
{
	$News=array();
	$News=explode("*",$res['content']);
	//print_r($News);
	
	for($i=0;$i<count($News)-1;$i++)
	{
		$temp=explode("|",$News[$i]);
		$Pati[$i] = array("id"=>$temp[1],"name"=>$temp[2],"price"=>$temp[3],"num"=>$temp[4],"test"=>$temp[5]);
	}

	$bid=$res['id'];
	$sql0="DELETE FROM drug_bill WHERE id= '$bid' ";
	mysql_query("set names utf8");
	$query0=mysql_query($sql0);
	
	$smarty = new Smarty();
	$smarty->assign("bid", $bid);
	$smarty->assign("News", $Pati);
	$smarty->display("phar.htm");
	
	
}

?>
</div>