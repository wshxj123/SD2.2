<?php /* Smarty version Smarty-3.1.15, created on 2013-12-21 04:04:21
         compiled from ".\templates\user.htm" */ ?>
<?php /*%%SmartyHeaderCode:1678752b0921b2a9ac2-85026169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72b84027ebe3efae05cdc105c466fa53c6389aac' => 
    array (
      0 => '.\\templates\\user.htm',
      1 => 1387597655,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1678752b0921b2a9ac2-85026169',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52b0921b33ad83_84252466',
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b0921b33ad83_84252466')) {function content_52b0921b33ad83_84252466($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>预约总览</title>
		<link rel="stylesheet" href="css/960.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="css/template.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="css/colour.css" type="text/css" media="screen" charset="utf-8" />
	</head>
	<body>

		<h1 id="head">用户个人中心</h1>

		<ul id="navigation">
			<li><span class="active">Overview</span></li>
			<li><a href="change_user.php">修改个人资料</a></li>
			<li><a href="history.php">查看预约历史</a></li>
			<li><a href="index.php">返回</a></li>
		</ul>
		
		<div id="content" class="container_16 clearfix">
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>



		</div>

		
	</body>
</html><?php }} ?>
