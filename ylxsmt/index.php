<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="utf-8">
    <title>门诊系统</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">  

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
	<SCRIPT>
	function getre()
{
var xmlhttp;
var email = document.getElementById("email").value;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	 //document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
	 // alert("成功");
    }
  }
xmlhttp.open("POST","sendemail/apply.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("to="+email);
}
	</SCRIPT>
  </head>

  <body>

	<?
		$flag=0;
		$flag0=0;
		if (isset($_COOKIE["name"]) && isset($_COOKIE["type"]))
		{
			if($_COOKIE["type"]==5)
			{
				$flag=1;
			}
		}

		if(isset($_POST["cmd"]))
		{
			if($_POST["cmd"] == "exit" && isset($_COOKIE["name"]))
			{
				$exname=$_COOKIE["name"];
				setcookie("name", "$exname", time()-3600);
			}	
		}

	?>
		<div id="Reg-Modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">用户注册</h3>
            </div>
            <div class="modal-body">
				
				<form class="form-horizontal" action="register.php" method="POST">
				  <div class="control-group">
					 <label class="control-label">用户名&nbsp&nbsp</label>
					<div class="controls">
						<input type="text" name="name"/>
					</div>
				</div>
				
				<div class="control-group">
					 <label class="control-label">真实姓名</label>
					<div class="controls">
						<input type="text" name="rname"/>
					</div>
				</div>

				 <div class="control-group">
					 <label class="control-label">手机号码</label>
					<div class="controls">
						<input  type="text" name="phone"/>
					</div>
				</div>

				<div class="control-group">
					 <label class="control-label">邮&nbsp&nbsp&nbsp&nbsp箱</label>
					<div class="controls">
						<input  type="text" name="email" id="email"/>
					</div>
				</div>
				
				<div class="control-group">
					<div class="controls">
						<a class="btn" onclick="getre()">获取验证码</a>
					</div>
				</div>

				<div class="control-group">
					 <label class="control-label">验证码</label>
					<div class="controls">
						<input  type="text" name="iden"/>
					</div>
				</div>

				 <div class="control-group">
					 <label class="control-label">身份证号</label>
					<div class="controls">
						<input type="text" name="id"/>
					</div>
				</div>
				<div class="control-group">
					 <label class="control-label">年&nbsp&nbsp&nbsp&nbsp龄</label>
					<div class="controls">
						<input type="number" name="age"/>
					</div>
				</div>

				<div class="control-group">
					 <label class="control-label">密&nbsp&nbsp&nbsp&nbsp码</label>
					<div class="controls">
						<input type="password" name="passwd"/>
					</div>
				</div>

					
				 <div class="control-group">
					<div class="controls">
						<button type="submit" class="btn" onclick="getIn()">提交</button>
					</div>
				</div>
				</form>
					
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                
            </div>
        </div>

	
	<div id="Pat-Modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">用户登录</h3>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="back.php" method="POST">
				<div class="control-group">
					 <label class="control-label">用 户</label>
					<div class="controls">
						<input id="inputName" type="text" name="name"/>
					</div>
				</div>
				<div class="control-group">
					 <label class="control-label">密 码</label>
					<div class="controls">
						<input id="inputPassword" type="password" name="passwd"/>
					</div>
				</div>
				<input type=hidden name="type" value="5">
				<div class="control-group">
					<div class="controls">
						 <button type="submit" class="btn" onclick="getIn()">登录</button>
					</div>
				</div>
			</form>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            </div>
        </div>

	<div id="Mec-Modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">药剂师登录</h3>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="back.php" method="POST">
				<div class="control-group">
					 <label class="control-label">用 户</label>
					<div class="controls">
						<input id="inputName" type="text" name="name"/>
					</div>
				</div>
				<div class="control-group">
					 <label class="control-label">密 码</label>
					<div class="controls">
						<input id="inputPassword" type="password" name="passwd"/>
					</div>
				</div>
				<input type=hidden name="type" value="3">
				<div class="control-group">
					<div class="controls">
						<button type="submit" class="btn" onclick="getIn()">登录</button>
					</div>
				</div>
			</form>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            </div>
        </div>

		<div id="Exo-Modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">专家登录</h3>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="back.php" method="POST">
				<div class="control-group">
					 <label class="control-label">用 户</label>
					<div class="controls">
						<input id="inputName" type="text" name="name"/>
					</div>
				</div>
				<div class="control-group">
					 <label class="control-label">密 码</label>
					<div class="controls">
						<input id="inputPassword" type="password" name="passwd"/>
					</div>
				</div>
				<input type=hidden name="type" value="4">
				<div class="control-group">
					<div class="controls">
						 <button type="submit" class="btn" onclick="getIn()">登录</button>
					</div>
				</div>
			</form>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            </div>
        </div>

		<div id="Admin-Modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">医师登录</h3>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="back.php" method="POST">
				<div class="control-group">
					 <label class="control-label">用 户</label>
					<div class="controls">
						<input id="inputName" type="text" name="name"/>
					</div>
				</div>
				<div class="control-group">
					 <label class="control-label">密 码</label>
					<div class="controls">
						<input id="inputPassword" type="password" name="passwd"/>
					</div>
				</div>
				<input type=hidden name="type" value="2">
				<div class="control-group">
					<div class="controls">
						 <button type="submit" class="btn" onclick="getIn()">登录</button>
					</div>
				</div>
			</form>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                
            </div>
        </div>

		<div id="About-Modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">关于</h3>
				<center><img src="img/lika2.jpg" class="img-circle"><br/>
					<font face="微软雅黑" size="4" text-align=right >HIT1103201_香烟头团队特别制作.</font></center>
            </div>
            <div class="modal-body">
				
				<div><?//TODO?></div>

            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                
            </div>
        </div>

		<div id="Score-Modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
				<? 
				if($flag)
				{
					echo "<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
                <h3 id='myModalLabel'>专家服务质量评分</h3>
				
				<div class='modal-body'>
					<form class='form-horizontal' action='score.php' method='POST'>
					<div class='control-group'>
						 <br/><label class='control-label'>就诊号码</label>
						<div class='controls'>
							<input id='id' type='text' name='id'/>
						</div>
					</div>
					<div class='control-group'>
						 <label class='control-label'>评&nbsp&nbsp&nbsp&nbsp分</label>
						<div class='controls'>
							<input id='inputScore' type='range' min='1' max='10' name='score'/> 10分
						</div>
					</div>
					<div class='control-group'>
						<div class='controls'>
							 <button type='submit' class='btn' onclick='getIn()'>提交</button>
						</div>
					</div>
					</form>
				</div>";
				}else{
					echo "<p><h2><strong>请登录!</strong></2></p>";
				}
				?>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                
            </div>
        </div>

		<div id="Register-Modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<?
				if($flag)
				{
					echo "
					<h3 id='myModalLabel'>挂号</h3>
				</div>
				<div class='modal-body'>
					
					<form class='form-horizontal' action='back.php' method='POST'>

					<div class='control-group'>
						<label class='control-label'>科&nbsp&nbsp&nbsp&nbsp目</label>
						<div class='controls'>
							<select name='class' class='selectpicker show-tick' data-size='6' value=''>
								<option></option>
								<option value='1'>内科</option>
								<option value='2'>外科</option>
								<option value='3'>儿科</option>
							</select>
						</div>
					</div>
					<input type=hidden name='type' value='1'>
						
					 <div class='control-group'>
						<div class='controls'>
							<button type='submit' class='btn' onclick='getIn()'>提交</button>
						</div>
					</div>
					</form>";
				}else
				{
					echo "<p><h2><strong>请登录!</strong></2></p>";
				}
					?>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                
            </div>
        </div>

    <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="#">门诊系统</a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse" >
              <ul class="nav">
                <li class="active"><a href="index.php">主页</a></li>
				<li><a href="#About-Modal" data-toggle="modal">关于</a></li>
				<li><a href="#Register-Modal" data-toggle="modal" onclick="regis()">挂号</a></li>
				<li><a href="expert.php">专家预约</a></li>
				<li><a href="#Score-Modal" data-toggle="modal">专家服务评分</a></li>
                <!-- Read about Bootstrap dropdowns at http://twbs.github.com/bootstrap/javascript.html#dropdowns -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">登录 <b class="caret"></b></a>
                  <ul class="dropdown-menu">
					 <li>  <a class="btn" href="#Pat-Modal" role="button" class="btn" data-toggle="modal">用户登录</a></li>
					 <li class="divider"></li>
                    <li>  <a class="btn" href="#Mec-Modal" role="button" class="btn" data-toggle="modal">药剂师登录</a></li>
                    <li class="divider"></li>
                    <li> <a class="btn" href="#Admin-Modal" role="button" class="btn" data-toggle="modal">医师登录</a></li>
					<li class="divider"></li>
					 <li> <a class="btn" href="#Exo-Modal" role="button" class="btn" data-toggle="modal">专家登录</a></li>
                  </ul>
                </li>
					
				<li><a href="#Reg-Modal" data-toggle="modal">用户注册</a></li>
				
				<li id="user" class="nav user">
				<?php
				
				if (isset($_COOKIE["name"]) && $_COOKIE["type"]==5)
				{
					$name=$_COOKIE["name"];
					echo "<a href='user.php'>" . $name . "</a><li class='nav user exit'>
					<a href='' onclick='exit()'>退出</a>
				</li>";
				}else
				{
					echo "<a>Welcome guest!</a>";
				}?></li>
				
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->



    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" height=400px width=400px margin=0>
      <div class="carousel-inner">
        <div class="item active">
          <img src="img/s1.jpg" alt="">
          <div class="container">
            <!--<div class="carousel-caption">
              <h1>Example headline.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Sign up today</a>
            </div>-->
          </div>
        </div>
        <div class="item">
          <img src="img/s2.jpg" alt="">
          <div class="container">
            <!--<div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Learn more</a>
            </div>-->
          </div>
        </div>
        <div class="item">
          <img src="img/lika.jpg" alt="">
          <div class="container">
            <!--<div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Browse gallery</a>
            </div>-->
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->


	



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
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
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
    <script src="bootstrap/js/holder.js"></script>
  </body>
</html>
