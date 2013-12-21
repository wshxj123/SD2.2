<?php /* Smarty version Smarty-3.1.15, created on 2013-12-21 04:05:52
         compiled from ".\templates\birdeye.htm" */ ?>
<?php /*%%SmartyHeaderCode:555452adca0eb24aa4-31290051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4092962802143bceb96120b8c16f47a0cbc1d858' => 
    array (
      0 => '.\\templates\\birdeye.htm',
      1 => 1387597655,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '555452adca0eb24aa4-31290051',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52adca0ec0bf03_67316518',
  'variables' => 
  array (
    'News' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52adca0ec0bf03_67316518')) {function content_52adca0ec0bf03_67316518($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
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

		<h1 id="head">行程总览</h1>

		<ul id="navigation">
			<li><span class="active">Overview</span></li>
			<li><a href="back.php">返回</a></li>
		</ul>
		
		<div id="content" class="container_16 clearfix">
			
			<table width="200" border="1">
			<thead>
							<tr>
								<th>患者姓名</th>
								<th>身份证</th>
								<th>年龄</th>
								<th>联系方式</th>
								<th>预约日期</th>
							</tr>
						</thead>
			  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['name'] = 'loop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] = is_array($_loop=count($_smarty_tpl->tpl_vars['News']->value)) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total']);
?>
							<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['News']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['na'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['News']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['id'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['News']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['ag'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['News']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['phone'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['News']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['da'];?>
</td>

							</tr>
							<?php endfor; else: ?>
							对不起，没有任何病人信息！
							<?php endif; ?>	
			</table>

								



		</div>

			<div id="foot">
				未来7天预约情况
			</div>
		
	</body>
</html><?php }} ?>
