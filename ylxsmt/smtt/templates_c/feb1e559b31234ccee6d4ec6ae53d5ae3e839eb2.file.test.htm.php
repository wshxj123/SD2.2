<?php /* Smarty version Smarty-3.1.15, created on 2013-11-06 19:06:10
         compiled from "D:\php\htdocs\smtt\templates\test.htm" */ ?>
<?php /*%%SmartyHeaderCode:6160527a7de258f8d2-17408583%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'feb1e559b31234ccee6d4ec6ae53d5ae3e839eb2' => 
    array (
      0 => 'D:\\php\\htdocs\\smtt\\templates\\test.htm',
      1 => 1383764768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6160527a7de258f8d2-17408583',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_527a7de26435d5_26045633',
  'variables' => 
  array (
    'title' => 0,
    'content' => 0,
    'ttttt' => 0,
    'a' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527a7de26435d5_26045633')) {function content_527a7de26435d5_26045633($_smarty_tpl) {?>　　<html>
　　<head>
　　<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
　　<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
　　</head>
　　<body>
　　<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

	<?php $_smarty_tpl->tpl_vars['a'] = new Smarty_variable($_smarty_tpl->tpl_vars['ttttt']->value+$_smarty_tpl->tpl_vars['content']->value+4, null, 0);?>
	<?php echo $_smarty_tpl->tpl_vars['a']->value;?>

　　</body>
　　</html><?php }} ?>
