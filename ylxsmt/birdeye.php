<?
include("conn.php");

if(isset($_COOKIE["name"]))
{
	$name=$_COOKIE["name"];
}else
{
	echo "<script>location.href='back.php'</script>";
}

$name=$_COOKIE["name"];
$sql="SELECT * FROM expert WHERE name='$name'";
mysql_query("set names utf8");
$pares=query($sql);

$News=array();
$News=explode("*",$pares['sche']);
//print_r($News);

$da=date("d");
$lenth=count($News)-1;

for($i=0;$i<$da+8;$i++)
{
	for($j=0;$j<$lenth;$j++)
	{
		$mon=date("t");
		$dat=$i;
		if($dat>$mon)
		{
			$dat=$dat-$mon;
		}
		$temp=explode("|",$News[$j]);
		//print_r($temp);
		if($temp[2]==$dat)
		{
			if($temp[3]==1)
			{
				$time="上午";
			}else if($temp[3]==2)
			{
				$time="下午";
			}else{
				$time="晚上";
			}
			$sql2="SELECT * FROM user WHERE (uname = '$temp[1]') ";
			mysql_query("set names utf8");
			$query2=mysql_query($sql2,$conn); 
			$res2=mysql_fetch_array($query2);
			
			$Pati[] = array("id"=>$res2['id'],"da"=>$temp[2]."th".$time,"ag"=>$res2['age'],"na"=>$res2['uname'],"phone"=>$res2['phone']);
		}else{
			continue;
		}
	}
}
require ("main.php");
$tpl=new Smarty();
$tpl->assign("News", $Pati);
//$tpl->assign("name", $name);
$tpl->display("birdeye.htm");

?>