　<?php
	require ("main.php");
	$tpl->assign("title", "测试用的网页标题");
	$tpl->assign("content", "2");
	$tpl->assign("ttttt","1");
	$tpl->display('test.htm');
	
	?>