<?php /* Smarty version Smarty-3.1.15, created on 2013-11-12 16:26:10
         compiled from ".\templates\mec.htm" */ ?>
<?php /*%%SmartyHeaderCode:25866527b8a42d751a6-97884175%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a830cfed31305b7040f467f7c7a9dcb10b250bab' => 
    array (
      0 => '.\\templates\\mec.htm',
      1 => 1384267030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25866527b8a42d751a6-97884175',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_527b8a42de0dc0_42404214',
  'variables' => 
  array (
    'name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527b8a42de0dc0_42404214')) {function content_527b8a42de0dc0_42404214($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>开药</title>
		<link rel="stylesheet" href="css/960.css" type="text/css" media="screen" charset="utf-8" />
		<!--<link rel="stylesheet" href="css/fluid.css" type="text/css" media="screen" charset="utf-8" />-->
		<link rel="stylesheet" href="css/template.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="css/colour.css" type="text/css" media="screen" charset="utf-8" />
	</head>
	<body>
	<h1 id="head">Steal My Admin Template</h1>
	<ul id="navigation">
			<li><span class="active">Overview</span></li>
			<li><a href="#">News</a></li>
			<li><a href="#">Users</a></li>
		</ul>
			<div id="content" class="container_16 clearfix">
				<div class="grid_16">
					<h2>welcome back <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 医师</h2>
					<p class="error">Something went wronk.</p>
				</div>

				<div class="grid_5">
					<p>
						<label for="title">Title <small>Must contain alpha-numeric characters.</small></label>
						<input type="text" name="title" />
					</p>
				</div>

				<div class="grid_5">
					<p>
						<label for="title">Slug <small>Must contain alpha-numeric characters.</small></label>
						<input type="text" name="title" />
					</p>
						
				</div>
				<div class="grid_6">
					<p>
						<label for="title">Category</label>
						<select>
							<option>Draft</option>
							<option>Published</option>
							<option>Private</option>
						</select>
					</p>
				</div>

				<div class="grid_16">
					<p>
						<label>Summary <small>Will be displayed in search engine results.</small></label>
						<textarea></textarea>
					</p>
				</div>

				<div class="grid_16">
					<p>
						<label>Article <small>Markdown Syntax.</small></label>
						<textarea class="big"></textarea>
					</p>
					<p class="submit">
						<input type="reset" value="Reset" />
						<input type="submit" value="Post" />
					</p>
				</div>
			</div>
		
		<div id="foot">
					<a href="#">Contact Me</a>
		</div>
	</body>
</html><?php }} ?>
