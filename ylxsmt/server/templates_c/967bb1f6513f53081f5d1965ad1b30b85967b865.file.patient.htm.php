<?php /* Smarty version Smarty-3.1.15, created on 2013-11-14 11:57:00
         compiled from ".\templates\patient.htm" */ ?>
<?php /*%%SmartyHeaderCode:31042528393f5d916f4-18580453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '967bb1f6513f53081f5d1965ad1b30b85967b865' => 
    array (
      0 => '.\\templates\\patient.htm',
      1 => 1384355500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31042528393f5d916f4-18580453',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_528393f61bf5e7_77415302',
  'variables' => 
  array (
    'name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528393f61bf5e7_77415302')) {function content_528393f61bf5e7_77415302($_smarty_tpl) {?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>哔哩哔哩门诊部</title>
		<link rel="stylesheet" href="css/960.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="css/template.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="css/colour.css" type="text/css" media="screen" charset="utf-8" />
		<!--[if IE]><![if gte IE 6]><![endif]-->
		<script src="js/glow/1.7.0/core/core.js" type="text/javascript"></script>
		<script src="js/glow/1.7.0/widgets/widgets.js" type="text/javascript"></script>
		<link href="js/glow/1.7.0/widgets/widgets.css" type="text/css" rel="stylesheet" />
		<script type="text/javascript">
			glow.ready(function(){
				new glow.widgets.Sortable(
					'#content .grid_5, #content .grid_6',
					{
						draggableOptions : {
							handle : 'h2'
						}
					}
				);
			});
		</script>
		<!--[if IE]><![endif]><![endif]-->
	</head>
	<body>

		<h1 id="head">哔哩哔哩门诊部</h1>
		
		<ul id="navigation">
			<li><span class="active">主页</span></li>
			<li><a href='#'  onclick='exit()' id='mec'>退出</a></li>
		</ul>
		<div id="content" class="container_16 clearfix">
			<div class="grid_5">
					<div class="box">
						<h2>╮(╯▽╰)╭</h2>
						<div class="utils">
							welcome back .MR <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

							
							<div id="online"></div> <br/>
							<div id="patient">病人资料:</div>
							<button type="button" onclick="loadPatient()">下一位</button>
						</div>
					</div>
			</div>
		</div>
	</body>
</html>







<?php }} ?>
