
<?
include ("conn.php");
$sql_num="SELECT * FROM user";
mysql_query('SET NAMES utf8');
$query_num=mysql_query($sql_num,$conn);
$name=$_COOKIE["name"];
//$number=mysql_num_rows($query_num);

require("main.php");

while($res=mysql_fetch_array($query_num))
{
	$News=array();
	$News=explode("*",$res['history']);
	//print_r($News);
	
	for($i=0;$i<count($News)-1;$i++)
	{
		$temp=explode("|",$News[$i]);
		$Pati[] = array("exna"=>$temp[1],"time"=>$temp[2],"order"=>$temp[3]);
	}

	$bid=$res['id'];
}
	$smarty = new Smarty();
	$smarty->assign("name", $name);
	$smarty->assign("bid", $bid);
	$smarty->assign("News", $Pati);
	$smarty->display("history.htm");

?>