<?php /* Smarty version Smarty-3.1.15, created on 2013-12-21 04:05:50
         compiled from ".\templates\expert.htm" */ ?>
<?php /*%%SmartyHeaderCode:518527f3fd077b122-85801971%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02155f7c268ed3f013ddf3f0c16c8ced453f3754' => 
    array (
      0 => '.\\templates\\expert.htm',
      1 => 1387597655,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '518527f3fd077b122-85801971',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_527f3fd0898462_15719045',
  'variables' => 
  array (
    'name' => 0,
    'News' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527f3fd0898462_15719045')) {function content_527f3fd0898462_15719045($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>专家个人中心</title>
		<link rel="stylesheet" href="css/960.css" type="text/css" media="screen" charset="utf-8" />
		<!--<link rel="stylesheet" href="css/fluid.css" type="text/css" media="screen" charset="utf-8" />-->
		<link rel="stylesheet" href="css/template.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="css/colour.css" type="text/css" media="screen" charset="utf-8" />
		<script src='js/main.js'></script>
	<script>
		function expert_exit()
		{
			{
			var xmlhttp;

			if (window.XMLHttpRequest)
			  {
			  xmlhttp=new XMLHttpRequest();
			  }
			else
			  {
			  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
			xmlhttp.onreadystatechange=function()
			  {
			  if (xmlhttp.readyState==4 && xmlhttp.status==200)
				{
				 alert("退出成功");
				 location.href='index.php';
				}
			  }
			xmlhttp.open("POST","back.php",true);
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp.send("cmd=exit");
			}
		}
	</script>
	</head>
	<body>
		
		<h1 id="head">专家个人中心</h1>
		
		<ul id="navigation">
			<li><span class="active">Overview</span></li>
			<li><a href="birdeye.php">总览</a></li>
			<li><a href='#'  onclick='expert_exit()' id='mec'>退出</a></li>
		</ul>
		
			<div id="content" class="container_16 clearfix">
				<label>专家,<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
你好</label>

				<div class="grid_16">
					<table>
						<thead>
							<tr>
								<th>患者姓名</th>
								<th>身份证</th>
								<th>年龄</th>
								<th>联系方式</th>
								<th>预约日期</th>
								<th colspan="2" width="10%">Actions</th>
							</tr>
						</thead>
						<tbody>
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
							<td><a href="#" class="confirm" name="confirm" onclick="confirm('<?php echo $_smarty_tpl->tpl_vars['News']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['name'];?>
','<?php echo $_smarty_tpl->tpl_vars['News']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['date'];?>
','<?php echo $_smarty_tpl->tpl_vars['News']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['time'];?>
')" class="confirm">Confirm</a></td>
							<td><a href="#" class="delete" name="delete" onclick="del('<?php echo $_smarty_tpl->tpl_vars['News']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['name'];?>
','<?php echo $_smarty_tpl->tpl_vars['News']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['date'];?>
','<?php echo $_smarty_tpl->tpl_vars['News']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['time'];?>
')" class="delete">Delete</a></td>
							
							</tr>
							<?php endfor; else: ?>
							对不起，没有任何病人信息！
							<?php endif; ?>
						</tbody>
					</table>
				</div>
			</div>
				
		</div>
	</body>
</html><?php }} ?>
