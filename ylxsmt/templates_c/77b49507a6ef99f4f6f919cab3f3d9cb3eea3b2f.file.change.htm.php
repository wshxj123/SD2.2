<?php /* Smarty version Smarty-3.1.15, created on 2013-12-21 04:04:22
         compiled from ".\templates\change.htm" */ ?>
<?php /*%%SmartyHeaderCode:1775252b0a1826461b1-60775261%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77b49507a6ef99f4f6f919cab3f3d9cb3eea3b2f' => 
    array (
      0 => '.\\templates\\change.htm',
      1 => 1387597655,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1775252b0a1826461b1-60775261',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52b0a1826bf471_09966467',
  'variables' => 
  array (
    'name' => 0,
    'phone' => 0,
    'email' => 0,
    'age' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b0a1826bf471_09966467')) {function content_52b0a1826bf471_09966467($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
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
			<li><a href="user.php">Overview</a></span></li>
			<li><a href="change_user.php">修改个人资料</a></li>
			<li><a href="user.php">返回</a></li>
		</ul>
		
		<div id="content" class="container_16 clearfix">
			<form action="change_user.php" method="POST" >
				姓 名<input type=text name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"></input>
				电 话<input type=text name="phone" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
"></input>
				邮箱 <input type=text name="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"></input>
				年龄 <input type=text name="age" value="<?php echo $_smarty_tpl->tpl_vars['age']->value;?>
"></input>
				<input type="submit"></input>
			</form>


		</div>

		
	</body>
</html><?php }} ?>
