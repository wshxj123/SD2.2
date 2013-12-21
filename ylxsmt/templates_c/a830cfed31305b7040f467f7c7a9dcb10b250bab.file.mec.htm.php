<?php /* Smarty version Smarty-3.1.15, created on 2013-12-21 09:43:21
         compiled from ".\templates\mec.htm" */ ?>
<?php /*%%SmartyHeaderCode:25866527b8a42d751a6-97884175%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a830cfed31305b7040f467f7c7a9dcb10b250bab' => 
    array (
      0 => '.\\templates\\mec.htm',
      1 => 1387618230,
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
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet"> 
		
		<script src="bootstrap/js/jquery.js"></script>
		<script src="bootstrap/js/transition.js"></script>
		<script src="bootstrap/js/alert.js"></script>
		<script src="bootstrap/js/modal.js"></script>
		<script src="bootstrap/js/dropdown.js"></script>
		<script src="bootstrap/js/scrollspy.js"></script>
		<script src="bootstrap/js/tab.js"></script>
		<script src="bootstrap/js/tooltip.js"></script>
		<script src="bootstrap/js/popover.js"></script>
		<script src="bootstrap/js/button.js"></script>
		<script src="bootstrap/js/collapse.js"></script>
		<script src="bootstrap/js/carousel.js"></script>
		<script src="bootstrap/js/typeahead.js"></script>
		<script src="js/main.js"></script>
		<script>
		  !function ($) {
			$(function(){

			  $('#myCarousel').carousel()
			})
		  }(window.jQuery)
		</script>
			<script type="text/javascript">
	
	var summec="";
	function add(id)
	{
		
		var tmp=document.getElementById("num"+id).value;
		var tmp1=document.getElementById("rule"+id).value;
		var tmp2=document.getElementById("name"+id).innerHTML;
		var tmp3=document.getElementById("price"+id).innerHTML;
		
		var price = tmp3.replace(/[^0-9]/ig,""); 
		var show=document.getElementById("show").innerHTML+='|'+id+'|'+tmp2+'|'+price+'|'+tmp+'|'+tmp1+'*';
		
		summec+=show;
	}

	function sub()
	{
		document.getElementById("res").value=summec;
	}
	

	loadrec(1);
	function changeclass(text)
	{
		clas=text;
	
		loadrec(clas);	
	}
	
	function loadrec(clas)
	{
		var xmlhttp;
		var type=clas;
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
				var path="panel-"+clas;
				var content=xmlhttp.responseText;
				document.getElementById(path).innerHTML=content;
			}
		  }
		xmlhttp.open("POST","showmec.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send("type="+type);
	}	
	</script>
		<script src="bootstrap/js/holder.js"></script>


	</head>
	<body>
	<h1 id="head">医师个人中心</h1>
	<ul id="navigation">
			<li><span class="active">Overview</span></li>
			<li><a href="back.php">返回</a></li>
		</ul>
			<div id="content" class="container_16 clearfix">
				<div class="grid_16">
					<h2>welcome back <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 医师</h2>
					<!--<p class="error">Something went wronk.</p>-->
				</div>
			<form method='POST' action='phar.php'>
			<div class="row-fluid">
			<div class="span12">
				<div class="tabbable tabs-left" id="tabs-966809">
					<ul class="nav nav-tabs">
						<li class="active">
							<a href="#panel-1" data-toggle="tab" onclick="changeclass('1')">内科</a>
						</li>
						<li>
							<a href="#panel-2" data-toggle="tab" onclick="changeclass('2')">外科</a>
						</li>
						<li>
							<a href="#panel-3" data-toggle="tab" onclick="changeclass('3')">儿科</a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="panel-1">
							
							
					
						</div>
						<div class="tab-pane" id="panel-2">
							<p>
								
							</p>
						</div>
						<div class="tab-pane" id="panel-3">
							<p>
								
							</p>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
		<div id="foot">
		就诊号<input type=text name="order_key"></input><br/>
		<input type="hidden" id="res" name="res"></input>
		
		<input onclick="sub()" type="submit" align="right"></input>
			</form><br/>请确认:<p type="Text" id="show"></p>
			<!--<br/><a href="#">Contact Me</a>-->
		</div>
	</body>
</html><?php }} ?>
