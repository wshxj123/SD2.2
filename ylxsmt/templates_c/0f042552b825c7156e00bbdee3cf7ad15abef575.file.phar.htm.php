<?php /* Smarty version Smarty-3.1.15, created on 2013-12-21 04:05:20
         compiled from ".\templates\phar.htm" */ ?>
<?php /*%%SmartyHeaderCode:2606452b099baa3de36-63635622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f042552b825c7156e00bbdee3cf7ad15abef575' => 
    array (
      0 => '.\\templates\\phar.htm',
      1 => 1387597655,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2606452b099baa3de36-63635622',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52b099baa8c0e3_22914904',
  'variables' => 
  array (
    'bid' => 0,
    'News' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b099baa8c0e3_22914904')) {function content_52b099baa8c0e3_22914904($_smarty_tpl) {?>﻿						
					<td>就诊号：<?php echo $_smarty_tpl->tpl_vars['bid']->value;?>
</td>
					<table>
						<thead>
							<tr>
								<th>药品iD</th>
								<th>药品名称</th>
								<th>数量</th>
								<th>价格</th>
								<th colspan="2" width="10%">备注</th>
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
							<td><?php echo $_smarty_tpl->tpl_vars['News']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['id'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['News']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['name'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['News']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['price'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['News']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['num'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['News']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['test'];?>
</td>
							
							</tr>
							<?php endfor; else: ?>
							对不起，没有任何药品信息！
							<?php endif; ?>
						</tbody>
					</table>
<?php }} ?>
