<?
	//echo "→ _→";
	$id = $_POST["id"];

	require ("main.php");
	$tpl=new Smarty();
	//$tpl->assign("content", array('num'+$i=>$i));
	$tpl->display("appo.htm");
	//include("conn.php");
	//mysql_select_db($dbname,$conn); 
	//$sql="SELECT * FROM expert WHERE id='$id'";
	//$query=mysql_query($sql,$conn);
	//$res=mysql_fetch_array($query);
	//$ins=$res;


	//$sql="UPDATE expert SET patient='' WHERE id='$id' ";
	//$query=mysql_query($sql,$conn); 

	
?>