<?php /* Smarty version Smarty-3.1.15, created on 2013-11-07 12:13:24
         compiled from "medicine.php" */ ?>
<?php /*%%SmartyHeaderCode:21246527b82b01cbf85-83034791%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b53f885b47562be4b412227a60b7aa16c6a466a8' => 
    array (
      0 => 'medicine.php',
      1 => 1383826399,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21246527b82b01cbf85-83034791',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_527b82b021b4b3_08737269',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527b82b021b4b3_08737269')) {function content_527b82b021b4b3_08737269($_smarty_tpl) {?><<?php ?>?
	include("conn.php");

	$name =array();
	$price= array();
	$type=array();
	mysql_select_db($dbname,$conn); 
	for($i=0;$i<20;$i++)
	{
		$sql="SELECT * FROM medicine WHERE type='$i')";
		$query=mysql_query($sql,$conn); 

		while($res=mysql_fetch_array($query))
		{
			$name[i]="<table><tr><td>名字:".$res['name']."</td></tr>";		
			$price[i]="<table><tr><td>价格:".$res['price']."</td></tr>";
			$type[i]=$res['type'];
		}
	}

	require ("main.php");
	$tpl=new Smarty();
	
	$tpl->assign("name", "$name[0]");
	$tpl->assign("content","药物//待从MYSQL中取");
	$tpl->display("medicine.php");

?<?php ?>><?php }} ?>
