<?
include ("conn.php");
include_once("..\Smarty-3.1.15\libs\Smarty.class.php");

$dbname='cs';
mysql_select_db($dbname,$conn);
$sql_num="SELECT * FROM expert WHERE name='gxcissad'";
$query_num=mysql_query($sql_num,$conn);
$res=mysql_fetch_array($query_num);

$smarty = new Smarty(); 
$smarty->template_dir = "./templates";
$smarty->compile_dir = "./templates_c";
$smarty->cache_dir = "./cache"; 
$smarty->caching = true;
$smarty->cache_lifetime = 0;
$smarty->left_delimiter = "<{";
$smarty->right_delimiter = "}>";

$News=array();
$News=explode("*",$res['sche']);
print_r($News);


for($i=0;$i<count($News)-1;$i++)
{
	$temp=explode("|",$News[$i]);
	$Pati[] = array("id"=>$temp[1],"da"=>$temp[2],"ag"=>$temp[3],"na"=>$temp[4],"phone"=>$temp[5]);
}

$smarty->assign("News", $Pati);

$smarty->display("example7.htm");
?>