<?php /* Smarty version Smarty-3.1.15, created on 2013-11-07 11:51:39
         compiled from ".\templates\medicine.htm" */ ?>
<?php /*%%SmartyHeaderCode:27185527b7ecb63ee14-90163886%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37ed29b0b9821ea8f814a05e2a541c12743973ab' => 
    array (
      0 => '.\\templates\\medicine.htm',
      1 => 1383824545,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27185527b7ecb63ee14-90163886',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_527b7ecb6a9222_23180270',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527b7ecb6a9222_23180270')) {function content_527b7ecb6a9222_23180270($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>开药</title>
		<link rel="stylesheet" href="css/960.css" type="text/css" media="screen" charset="utf-8" />
		<link href="css/bootstrap-responsive.css" rel="stylesheet">
		<!--<link rel="stylesheet" href="css/fluid.css" type="text/css" media="screen" charset="utf-8" />-->
		<link rel="stylesheet" href="css/template.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="css/colour.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen" charset="utf-8" />
		<script src="js/jquery.js"></script>
		<script src="js/transition.js"></script>
		<script src="js/alert.js"></script>
		<script src="js/modal.js"></script>
		<script src="js/dropdown.js"></script>
		<script src="js/scrollspy.js"></script>
		<script src="js/tab.js"></script>
		<script src="js/tooltip.js"></script>
		<script src="js/popover.js"></script>
		<script src="js/button.js"></script>
		<script src="js/collapse.js"></script>
		<script src="js/carousel.js"></script>
		<script src="js/typeahead.js"></script>
	</head>
	<body>
	<h1 id="head">开药</h1>
	<ul id="navigation">
			<li><span class="active">Overview</span></li>
			<li><a href="#">News</a></li>
			<li><a href="#">Users</a></li>
		</ul>
			<div id="content" class="container_16 clearfix">
				<div class="grid_16">
					<p class="error"> 药品</p>
				</div>
				<div class="container-fluid">
					<div class="row-fluid">
						<div class="span12">
							<div class="accordion" id="accordion-959009">
								<div class="accordion-group">
									<div class="accordion-heading">
										 <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-959009" href="#accordion-element-440577"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a>
									</div>
									<div id="accordion-element-440577" class="accordion-body collapse">
										<div class="accordion-inner">
											<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>		
			</div>
	</body>
</html><?php }} ?>
