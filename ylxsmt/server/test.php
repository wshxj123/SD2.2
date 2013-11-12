　<?php
	require ("main.php");
	$tpl=new Smarty();
	for($i=1;$i<9;$i++)
	{
		$tpl->assign("content", array('num'+$i=>$i));
	}
	$tpl->display("test.htm");
	?>