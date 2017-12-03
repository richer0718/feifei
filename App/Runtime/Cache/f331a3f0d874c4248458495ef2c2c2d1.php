<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="webThemez.com">
	<title>飞飞辅助</title>
	<link rel="favicon" href="../Public/assets/images/favicon.png">
	<link rel="stylesheet" href="../Public/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../Public/assets/css/font-awesome.min.css"> 
	<link rel="stylesheet" href="../Public/assets/css/bootstrap-theme.css" media="screen"> 
	<link rel="stylesheet" href="../Public/assets/css/style.css">
    <link rel='stylesheet' id='camera-css'  href='../Public/assets/css/camera.css' type='text/css' media='all'> 
	<style>
		.secondary img{
			width:100%;
			height:100%;
			
		}
	</style>
</head>
<body>
	<div style="height:30px;line-height:30px;width:100%;">
	<?php if(empty($username)): ?><a style="float:right;font-size:18px;padding-right:100px;" href="__ROOT__/index.php/Index/findpassword">|找回密码</a>
	<a style="float:right;font-size:18px;" href="__ROOT__/index.php/Index/reg">|注册</a>
	<a style="float:right;font-size:18px;" href="__ROOT__/index.php/Index/login">登录</a>
	<?php else: ?>
	<a style="float:right;font-size:18px;padding-right:150px;" href="__ROOT__/index.php/Index/userCenter">个人中心</a>
	<a style="float:right;font-size:18px;padding-right:30px;" href="__ROOT__/index.php/Index/logOut">退出登录</a>
	<a style="float:right;font-size:18px;padding-right:30px;"><?php echo ($username); ?>，您好</a><?php endif; ?>
</div>
	
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="index.html">
					<img src="../Public/assets/images/logo.png" alt="Techro HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li class="active"><a href="__URL__/index">产品介绍</a></li>
					<li><a href="__URL__/about">使用教程</a></li>
					<li><a href="__URL__/services">辅助下载</a></li>
					<li><a href="__URL__/price">购买正版</a></li>
					<li><a href="__URL__/projects">问题汇总</a></li>
					<!--
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="sidebar-right.html">Right Sidebar</a></li>
							<li><a href="#">Dummy Link1</a></li>
							<li><a href="#">Dummy Link2</a></li>
							<li><a href="#">Dummy Link3</a></li>
						</ul>
					</li>
					<li><a href="contact.html">Contact</a></li>
					-->
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->

	<!-- Header -->
	<!--
	<header id="head" class="secondary" style="height:500px;width: 1000px;margin: 0 auto;">
        <img  src="../Public/1.jpg"/>
    </header>
    -->
	<!-- /Header -->

	
  
      <div class="container">
        <div class="row">
            <?php echo ($content); ?>
        </div>
	  </div>
   
  
	
    	 
    <footer id="footer">
		<div class="container">
			<div class="social text-center">
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-flickr"></i></a>
				<a href="#"><i class="fa fa-github"></i></a>
			</div>

			<div class="clear"></div>
			<!--CLEAR FLOATS-->
		</div>
		<div class="footer2">
			<div class="container">
				<div class="row">


					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="text-right">
								Copyright &copy; 2016.Company name All rights reserved.<a target="_blank" href="">飞飞辅助</a>
							</p>
						</div>
					</div>

				</div>
				<!-- /row of panels -->
			</div>
		</div>
	</footer>

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="../Public/assets/js/modernizr-latest.js"></script> 
	<script type='text/javascript' src='../Public/assets/js/jquery.min.js'></script>
    <script type='text/javascript' src='../Public/assets/js/fancybox/jquery.fancybox.pack.js'></script>
    
    <script type='text/javascript' src='../Public/assets/js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='../Public/assets/js/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='../Public/assets/js/camera.min.js'></script> 
    <script src="../Public/assets/js/bootstrap.min.js"></script> 
	<script src="../Public/assets/js/custom.js"></script>
    <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_4').camera({
				height: '600',
				loader: 'bar',
				pagination: false,
				thumbnails: false,
				hover: false,
				opacityOnGrid: false,
				imagePath: '../Public/assets/images/'
			});

		});
	</script>
    
</body>
</html>