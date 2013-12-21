<?php /* Smarty version Smarty-3.1.15, created on 2013-12-21 06:31:24
         compiled from ".\templates\patient.htm" */ ?>
<?php /*%%SmartyHeaderCode:475952b320c66a9b05-44334889%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '967bb1f6513f53081f5d1965ad1b30b85967b865' => 
    array (
      0 => '.\\templates\\patient.htm',
      1 => 1387597655,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '475952b320c66a9b05-44334889',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52b320c66fb3b8_63895184',
  'variables' => 
  array (
    'type' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b320c66fb3b8_63895184')) {function content_52b320c66fb3b8_63895184($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>挂号信息</title>
		<link rel="stylesheet" href="css/960.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="css/template.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="css/colour.css" type="text/css" media="screen" charset="utf-8" />
		
		<script type="text/javascript">
		window.setInterval("loadXMLDoc()",2000);
		function loadXMLDoc()
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
				document.getElementById("online").innerHTML=xmlhttp.responseText;
			}
		  }
		xmlhttp.open("POST","online.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send("type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
");
		}
		</script>



	</head>
	<body>

		<h1 id="head">挂号信息</h1>

		<ul id="navigation">
			<li><span class="active">Overview</span></li>
			<li><a href ="index.php">返回</a></li>
		</ul>
		
		<div id="content" class="container_16 clearfix">
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

			<div id="online"></div> <br/>

		</div>

		
	</body>
</html><?php }} ?>
