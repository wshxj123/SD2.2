<?php /* Smarty version Smarty-3.1.15, created on 2013-11-12 16:13:15
         compiled from ".\templates\appo.htm" */ ?>
<?php /*%%SmartyHeaderCode:36945280e11ca24fe3-09557804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9da2b227df297a2fc7699565199994cf8703da9' => 
    array (
      0 => '.\\templates\\appo.htm',
      1 => 1384267030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36945280e11ca24fe3-09557804',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5280e11cab8bd7_65172922',
  'variables' => 
  array (
    'eid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5280e11cab8bd7_65172922')) {function content_5280e11cab8bd7_65172922($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>预约</title>
		<link rel="stylesheet" href="css/960.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="css/template.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="css/colour.css" type="text/css" media="screen" charset="utf-8" />
		<!--[if IE]><![if gte IE 6]><![endif]-->
		<script src="js/glow/1.7.0/core/core.js" type="text/javascript"></script>
		<script src="js/glow/1.7.0/widgets/widgets.js" type="text/javascript"></script>
		<link href="js/glow/1.7.0/widgets/widgets.css" type="text/css" rel="stylesheet" />
		<link href="css/calendar.css" type="text/css" rel="stylesheet" />
		<script type="text/javascript" src="js/jquery-1.7.min.js"></script> 
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
		<script type="text/javascript"> 

//日历——————————————————————————————————————————
$(function() {
	
	//绘制月历体——————————————————————————————————————————
	
	 for(var i=0;i<35;i++){
	 $("<li><span></span></li>").appendTo(".month-body").addClass("month-cell"); 
	 }

	  var today=new Date()  
	  
	  var FullYear = today.getFullYear(); //获取年份
	  var m = today.getMonth();           //获取月号
	  var month = today.getMonth()+1;     //获取月份
	  
	  if(month<10){
		 month="0"+month; 
	  }
	  var date = today.getDate();	      //获取日期
	  var day = today.getDay();           //获取星期
	  
	  var monthsNum=[31,28,31,30,31,30,31,31,30,31,30,31];
	  var isleapyear = FullYear%4;        //判断闰年
	  if(isleapyear==0){
		  monthsNum[1]=29;
	  }
  
      if(day==0){
		  day = 7;
	  }
	  var firstDay = day-(date%7-1);       //!important 计算月初星期数

	  if(firstDay==7){                     //如果月初为七，归零
		  firstDay =0;
	  }
	  if(firstDay<0){                       //如果月初为负，加七循环
		  firstDay +=7;
	  }
	  
	  var f = firstDay;
	  for(var j=1;j<=monthsNum[m];j++){
		  var ins="c("+(f-4)+","+(firstDay-5+date)+ ")";
		  $("li.month-cell span").eq(f).text(j).parent().addClass("pink").attr("id",f-4).attr("onclick",ins);
		  f++; 
	  }
	  
	  $("li.month-cell span").eq(firstDay-1+date).parent().addClass("red");
	  
	  $(".month-head span").text(FullYear+"年"+month+"月");
	  
})

	var today=new Date();
	var tmp=today.getDate()-1;
	function c(day,to)
	{
		//alert(tmp);
		if(day-to<7 && day-to>0)
		{
			var div=document.getElementById(day);
			var ori=document.getElementById(tmp);
			if(day!=to)
			{
				if(div.className=="month-cell pink")
				{
					div.className="month-cell pink red";
					ori.className="month-cell pink";
					tmp=day;
				}
				else
				{
					div.className="month-cell pink";
				}
			}

			var da=document.getElementsByName("date");
			da[0].value=day;
		}
	}
	
</script>
		<!--[if IE]><![endif]><![endif]-->
	</head>
	<body>

		<h1 id="head">专家预约</h1>
		
		<ul id="navigation">
			<li><span class="active">Overview</span></li>
			<li><a href="#">News</a></li>
			<li><a href="#">Users</a></li>
		</ul>
		<div id="content" class="container_16 clearfix">
			<div class="grid_5">
					<form method="POST" action="appoi.php">
						<label>姓名</label>
							<input type="text" name="name"/>
						<label>身份证</label>
							<input type="text" name="id"/>
						<label>手机号码</label>
							<input type="text" name="phone"/>
						<label>年龄</label>
							<input type="text" name="age"/>
						<input type="hidden" value="0" name=date>
						<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['eid']->value;?>
" name=eid>
						<input type="submit">
						<label>!:最多只能提前七天预约专家</label>
					</form>
				</div>
			<div class="month-container">
						  <div class="month-head"><span></span></div>
						  <ul class="month-body">
						  <div class="month-cell orange"><span>日</span></div>    
						  <div class="month-cell blue"><span>一</span></div>
						  <div class="month-cell blue"><span>二</span></div>
						  <div class="month-cell blue"><span>三</span></div>
						  <div class="month-cell blue"><span>四</span></div>     
						  <div class="month-cell blue"><span>五</span></div>      
						  <div class="month-cell blue"><span>六</span></div>
						  </ul>
				<div class="clear">
			</div>
	</div>
	</body>
</html><?php }} ?>
