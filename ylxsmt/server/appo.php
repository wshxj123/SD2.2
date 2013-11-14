<?
	if($_POST["eid"]==0)
	{
		exit();
	}
	$expert_id= $_POST["eid"];
	
	require ("main.php");
	$tpl=new Smarty();
	$tpl->assign("eid","$expert_id");
	$tpl->display("appo.htm");
?>